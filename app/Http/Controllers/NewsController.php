<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\NewsContent;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', "DESC")->get();
        return view("admin.news.index", compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view("admin.news.create", compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'desc' => ['nullable'],
            'c_n' => ['nullable'],
            'c_heading' => ['nullable'],
            'c_content' => ['nullable'],
            'tags' => ['required'],
            'categories' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($request->hasFile("image")) {
            $fileNameWExt = $request->file("image")->getClientOriginalName();
            $fileName = pathinfo($fileNameWExt, PATHINFO_FILENAME);
            $fileExt = $request->file("image")->getClientOriginalExtension();
            if ($fileExt == "png" || $fileExt == "jpg" || $fileExt == "jpeg") {

                $fileNameToStore = $fileName . "_" . time() . "." . $fileExt;

                $file_url = url('/storage/news/' . $fileNameToStore);

                $request->file("image")->storeAs("public/news", $fileNameToStore);
            } else {
                return back()->with('error', "File is not Image");
            }
        } else {
            $fileNameToStore = "";
            $file_url = "";
        }

        $news = News::create([
            'title' => $request->title,
            'description' => $request->desc,
            'image' => $file_url,
        ]);

        if ($news) {

            if (!empty($request->c_n)) {
                foreach ($request->c_n as $key => $ch) {
                    if (!$ch == Null) {
                        $doc = "c_image" . $key;
                        if ($request->hasFile($doc)) {
                            $fileNameWExt = $request->file($doc)->getClientOriginalName();
                            $fileName = pathinfo($fileNameWExt, PATHINFO_FILENAME);
                            $fileExt = $request->file($doc)->getClientOriginalExtension();

                            if ($fileExt == "png" || $fileExt == "jpg" || $fileExt == "jpeg") {

                                $fileNameToStore = $fileName . "_" . time() . "." . $fileExt;

                                $file_url = url('/storage/news/' . $fileNameToStore);

                                $request->file($doc)->storeAs("public/news", $fileNameToStore);

                                $job_content = NewsContent::create([
                                    'news_id' => $news->id,
                                    'heading' => $request->c_heading[$key],
                                    'content' => $request->c_content[$key],
                                    'image' => $file_url,
                                ]);
                            } else {
                                $news->delete();
                                // return "file not pdf";
                                return back()->with('error', "File is not Image");
                            }
                        } else {

                            $job_content = NewsContent::create([
                                'news_id' => $news->id,
                                'heading' => $request->c_heading[$key],
                                'content' => $request->c_content[$key],
                            ]);
                        }
                    }
                }
            }

            $tags = explode(',', $request->tags);
            $tags = array_map('trim', $tags);
            $tags = array_filter($tags);
            $tags = array_unique($tags);

            $categories = explode(',', $request->categories);
            $categories = array_map('trim', $categories);
            $categories = array_filter($categories);
            $categories = array_unique($categories);

            // Add tags to News
            if (count($tags) > 0) {
                foreach ($tags as $t_key => $tag) {
                    $check = Tag::where('name', '=', $tag)->get();
                    if (count($check) > 0) {
                        $check_pv = DB::table('news_tag')->where(['tag_id' => $check[0]->id, 'news_id' => $news->id])->get();
                        if (!count($check_pv) > 0) {
                            $pv = DB::table('news_tag')->insert([
                                'tag_id' => $check[0]->id,
                                'news_id' => $news->id,
                            ]);
                        }
                    } else {
                        $t = Tag::create(['name' => $tag]);
                        $pv = DB::table('news_tag')->insert([
                            'tag_id' => $t->id,
                            'news_id' => $news->id,
                        ]);
                    }
                }
            } else {
                return back()->with("error", "Failed!, Tags are required.");
            }

            // Add categories to News
            if (count($categories) > 0) {
                foreach ($categories as $t_c => $category) {
                    $check = Category::where('name', '=', $category)->get();
                    if (count($check) > 0) {
                        $check_pv = DB::table('news_category')->where(['category_id' => $check[0]->id, 'news_id' => $news->id])->get();
                        if (!count($check_pv) > 0) {
                            $pv = DB::table('news_category')->insert([
                                'category_id' => $check[0]->id,
                                'news_id' => $news->id,
                            ]);
                        }
                    } else {
                        $c = Category::create(['name' => $category]);
                        $pv = DB::table('news_category')->insert([
                            'category_id' => $c->id,
                            'news_id' => $news->id,
                        ]);
                    }
                }
            } else {
                return back()->with("error", "Failed!, Categories are required.");
            }

            return redirect()->route('news')->with("success", "News has been posted");
        } else {
            return back()->with("error", "Failed to Post News");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $tags = Tag::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view("admin.news.edit", compact('news', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {

        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'desc' => ['nullable'],
            'n_n' => ['nullable'],
            'n_heading' => ['nullable'],
            'n_content' => ['nullable'],

            'c_n' => ['nullable'],
            'c_heading' => ['nullable'],
            'c_content' => ['nullable'],

            'tags' => ['nullable'],
            'categories' => ['nullable'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($request->hasFile("image")) {
            $fileNameWExt = $request->file("image")->getClientOriginalName();
            $fileName = pathinfo($fileNameWExt, PATHINFO_FILENAME);
            $fileExt = $request->file("image")->getClientOriginalExtension();
            if ($fileExt == "png" || $fileExt == "jpg" || $fileExt == "jpeg") {

                $fileNameToStore = $fileName . "_" . time() . "." . $fileExt;

                $file_url = url('/storage/news/' . $fileNameToStore);

                $request->file("image")->storeAs("public/news", $fileNameToStore);
            } else {
                return back()->with('error', "File is not Image");
            }
        } else {
            $fileNameToStore = $news->image;
        }

        $up = $news->update([
            'title' => $request->title,
            'description' => $request->desc,
            'image' => $fileNameToStore,
        ]);

        if ($up) {

            // Update
            if (!empty($request->n_n)) {
                foreach ($request->n_n as $key => $nh) {
                    if (!$nh == Null) {
                        $doc = "n_image" . $key;
                        if ($request->hasFile($doc)) {
                            $fileNameWExt = $request->file($doc)->getClientOriginalName();
                            $fileName = pathinfo($fileNameWExt, PATHINFO_FILENAME);
                            $fileExt = $request->file($doc)->getClientOriginalExtension();

                            if ($fileExt == "png" || $fileExt == "jpg" || $fileExt == "jpeg") {

                                $fileNameToStore = $fileName . "_" . time() . "." . $fileExt;

                                $file_url = url('/storage/news/' . $fileNameToStore);

                                $request->file($doc)->storeAs("public/news", $fileNameToStore);

                                $job_content = NewsContent::where(['id' => $key, 'news_id' => $news->id])->update([
                                    'heading' => $request->n_heading[$key],
                                    'content' => $request->n_content[$key],
                                    'image' => $fileNameToStore,
                                ]);
                            } else {
                                return back()->with('error', "File is not Image");
                            }
                        } else {

                            $job_content = NewsContent::where(['id' => $key, 'news_id' => $news->id])->update([
                                'heading' => $request->n_heading[$key],
                                'content' => $request->n_content[$key],
                            ]);
                        }
                    }
                }
            }

            // Insert
            if (!empty($request->c_n)) {
                foreach ($request->c_n as $key => $ch) {
                    if (!$ch == Null) {
                        if (!$request->c_heading[$key] == Null || !$request->c_content[$key] == Null) {
                            $doc = "c_image" . $key;
                            if ($request->hasFile($doc)) {
                                $fileNameWExt = $request->file($doc)->getClientOriginalName();
                                $fileName = pathinfo($fileNameWExt, PATHINFO_FILENAME);
                                $fileExt = $request->file($doc)->getClientOriginalExtension();

                                if ($fileExt == "png" || $fileExt == "jpg" || $fileExt == "jpeg") {

                                    $fileNameToStore = $fileName . "_" . time() . "." . $fileExt;

                                    $file_url = url('/storage/news/' . $fileNameToStore);

                                    $request->file($doc)->storeAs("public/news", $fileNameToStore);

                                    $job_content = NewsContent::create([
                                        'news_id' => $news->id,
                                        'heading' => $request->c_heading[$key],
                                        'content' => $request->c_content[$key],
                                        'image' => $fileNameToStore,
                                    ]);
                                } else {
                                    $news->delete();
                                    return back()->with('error', "File is not Image");
                                }
                            } else {

                                $job_content = NewsContent::create([
                                    'news_id' => $news->id,
                                    'heading' => $request->c_heading[$key],
                                    'content' => $request->c_content[$key],
                                ]);
                            }
                        }
                    }
                }
            }

            if (!empty($request->tags)) {
                $tags = explode(',', $request->tags);
                $tags = array_map('trim', $tags);
                $tags = array_filter($tags);
                $tags = array_unique($tags);

                // Add tags to News
                if (count($tags) > 0) {
                    foreach ($tags as $t_key => $tag) {
                        $check = Tag::where('name', '=', $tag)->get();
                        if (count($check) > 0) {
                            $check_pv = DB::table('news_tag')->where(['tag_id' => $check[0]->id, 'news_id' => $news->id])->get();
                            if (!count($check_pv) > 0) {
                                $pv = DB::table('news_tag')->insert([
                                    'tag_id' => $check[0]->id,
                                    'news_id' => $news->id,
                                ]);
                            }
                        } else {
                            $t = Tag::create(['name' => $tag]);
                            $pv = DB::table('news_tag')->insert([
                                'tag_id' => $t->id,
                                'news_id' => $news->id,
                            ]);
                        }
                    }
                }
                // else {
                //     return back()->with("error", "Failed!, Tags inserted are not valid.");
                // }
            }

            if (!empty($request->categories)) {
                $categories = explode(',', $request->categories);
                $categories = array_map('trim', $categories);
                $categories = array_filter($categories);
                $categories = array_unique($categories);

                // Add categories to News
                if (count($categories) > 0) {
                    foreach ($categories as $t_c => $category) {
                        $check = Category::where('name', '=', $category)->get();
                        if (count($check) > 0) {
                            $check_pv = DB::table('news_category')->where(['category_id' => $check[0]->id, 'news_id' => $news->id])->get();
                            if (!count($check_pv) > 0) {
                                $pv = DB::table('news_category')->insert([
                                    'category_id' => $check[0]->id,
                                    'news_id' => $news->id,
                                ]);
                            }
                        } else {
                            $c = Category::create(['name' => $category]);
                            $pv = DB::table('news_category')->insert([
                                'category_id' => $c->id,
                                'news_id' => $news->id,
                            ]);
                        }
                    }
                }
                // else {
                //     return back()->with("error", "Failed!, Categories inserted are not valid");
                // }
            }

            return back()->with("success", "News has been Updated");
        } else {
            return back()->with("error", "Failed to Update News");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $cont = $news->news_contents;

        foreach ($cont as $key => $con) {
            $con->delete();
        }

        $news->delete();

        return redirect()->route('news')->with('success', "News Deleted");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsContent  $cont
     * @return \Illuminate\Http\Response
     */
    public function destroy_cont(NewsContent $cont)
    {
        $cont->delete();

        return back()->with('success', "News Deleted");
    }

    public function remove_news_tag(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'news_id' => ['required'],
            'tag_id' => ['required'],

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $news_tag = DB::table('news_tag')->where(['tag_id' => $request->tag_id, 'news_id' => $request->news_id])->delete();

        if ($news_tag) {
            return back()->with("success", "News tag has been removed.");
        } else {
            return back()->with("error", "Failed to delete news tag.");
        }
    }

    public function remove_news_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'news_id' => ['required'],
            'category_id' => ['required'],

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $news_category = DB::table('news_category')->where(['category_id' => $request->category_id, 'news_id' => $request->news_id])->delete();

        if ($news_category) {
            return back()->with("success", "News category has been removed.");
        } else {
            return back()->with("error", "Failed to delete news category.");
        }
    }
}
