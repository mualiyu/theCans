<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Community;
use App\Models\Gallery;
use App\Models\Neighbor;
use App\Models\News;
use App\Models\Space;
use App\Models\Tag;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index()
    {
        $spaces = Space::where('isActive', '=', '1')->orderBy('created_at', 'desc')->limit(3)->get();

        $news = News::orderBy('created_at', 'desc')->limit(3)->get();

        return view('main.index', compact('spaces', 'news'));
    }

    public function about_us()
    {
        return view('main.about_us');
    }

    public function foundation()
    {
        return view('main.foundation');
    }

    public function blog()
    {
        SEOTools::setTitle('Blogs');
        SEOTools::setDescription('The Cans Blog Page');
        SEOTools::opengraph()->setUrl(url('/blogs'));
        SEOTools::setCanonical(url('/blogs'));
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::opengraph()->addProperty('type', 'Posts');
        SEOTools::opengraph()->addProperty('type', 'Blogs');
        SEOTools::twitter()->setSite('@_thecanspark');
        SEOTools::jsonLd()->addImage(asset('assets/img/imagesa/logo.svg'));

        $news = News::orderBy('created_at', 'DESC')->get();

        $categories = Category::all();

        return view('main.our_stories.blog', compact('news', 'categories'));
    }

    public function category_blog($cat_name)
    {
        $category = Category::where('name', '=', $cat_name)->get();

        if (count($category) > 0) {
            $category = $category[0];

            $news = $category->news;

            $categories = Category::all();

            return view('main.our_stories.category_blog', compact('news', 'category', 'categories'));
        } else {
            abort(404);
        }
    }

    public function tag_blog($tag_name)
    {
        $tag = Tag::where('name', '=', $tag_name)->get();

        if (count($tag) > 0) {
            $tag = $tag[0];

            $news = $tag->news;

            // return $news;

            $categories = Category::all();

            return view('main.our_stories.tag_blog', compact('news', 'tag', 'categories'));
        } else {
            abort(404);
        }
    }

    public function single_blog($title)
    {
        $news = News::where('title', '=', $title)->get();
        $recent_news = News::orderBy('created_at', 'DESC')->limit(3)->get();

        if (count($news)) {
            $news = $news[0];

            SEOMeta::setTitle($news->title);
            SEOMeta::setDescription($news->description);
            SEOMeta::addMeta('article:published_time', $news->created_at->toW3CString(), 'property');
            SEOMeta::addMeta('article:section', $news->categories, 'property');
            SEOMeta::addKeyword([$news->tags[0]->name, $news->tags[1]->name]);

            OpenGraph::setDescription($news->description);
            OpenGraph::setTitle($news->title);
            OpenGraph::setUrl(route('main.single_blog', ['title'=>$title]));
            foreach($news->tags as $t){
                OpenGraph::addProperty('type', $t->name);
            }
            OpenGraph::addProperty('locale', 'en_NG');
            OpenGraph::addProperty('locale:alternate', ['en_NG', 'en-us']);

            OpenGraph::addImage(url('/storage/news/'.$news->image));
            OpenGraph::addImage(['url' => url('/storage/news/'.$news->image), 'size' => 300]);
            OpenGraph::addImage(url('/storage/news/'.$news->image), ['height' => 300, 'width' => 300]);

            JsonLd::setTitle($news->title);
            JsonLd::setDescription($news->description);
            JsonLd::setType('Article');
            JsonLd::addImage(url('/storage/news/'.$news->image));

            // OR with multi

            JsonLdMulti::setTitle($news->title);
            JsonLdMulti::setDescription($news->description);
            JsonLdMulti::setType('Article');
            JsonLdMulti::addImage(url('/storage/news/'.$news->image));
            if (! JsonLdMulti::isEmpty()) {
                JsonLdMulti::newJsonLd();
                JsonLdMulti::setType('WebPage');
                JsonLdMulti::setTitle('Page Article - ' . $news->title);
            }
            SEOTools::twitter()->setSite('@_thecanspark');

            return view('main.our_stories.single_blog', compact('recent_news', 'news'));
        } else {
            return back()->with('error', "News not found!!");
        }
    }

    public function blog_comment(News $news, Request $request) {
        $validator = Validator::make($request->all(), [
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_namemail' => ['required', 'string', 'max:255'],
            'comment' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }


    }

    public function gallery()
    {
        $galleries = Gallery::all();
        // $galleries = Gallery::orderBy('created_at', 'DESC')->get();

        return view('main.our_stories.gallery', compact('galleries'));
    }

    public function single_gallery(Gallery $gallery)
    {
        $images = $gallery->images;

        return view('main.our_stories.single_gallery', compact('images', 'gallery'));
    }

    public function coworking()
    {
        $spaces = Space::where('isActive', '=', '1')->orderBy('created_at', 'ASC')->get();
        return view('main.services.coworking', compact('spaces'));
    }

    public function technology_consulting()
    {
        return view('main.services.technology_consulting');
    }

    public function community()
    {
        $communities = Community::all();

        return view('main.the_cans_park.community', compact('communities'));
    }

    public function neighbors_of_the_park()
    {
        $neighbors = Neighbor::all();

        return view('main.the_cans_park.neighbors_of_the_park', compact('neighbors'));
    }

    public function contact_us()
    {
        return view('main.contact_us');
    }
}
