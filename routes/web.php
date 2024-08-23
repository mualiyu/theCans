<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Admin Routes
Route::domain(env("APP_SUB_URL"))->group(function () {
    Auth::routes();

    Route::middleware('auth')->get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Settings routes
    Route::prefix('/settings')->group(function () {
        Route::get('', [App\Http\Controllers\SettingController::class, 'index'])->name('settings');

        Route::get('/add/user', [App\Http\Controllers\SettingController::class, 'show_admins'])->name('users');
        Route::post('/add/user', [App\Http\Controllers\SettingController::class, 'register_admin'])->name('register_new_user');
    });


    Route::middleware('auth')->prefix('/news')->group(function () {
        Route::get('', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
        Route::get('/create', [App\Http\Controllers\NewsController::class, 'create'])->name('show_create_news');
        Route::post('/create', [App\Http\Controllers\NewsController::class, 'store'])->name('store_news');
        Route::get('/{news}/news-info', [App\Http\Controllers\NewsController::class, 'edit'])->name('show_edit_news');
        Route::post('/{news}/news-info', [App\Http\Controllers\NewsController::class, 'update'])->name('update_news');

        Route::post('/{news}/delete/', [App\Http\Controllers\NewsController::class, 'destroy'])->name('delete_news');
        Route::post('/{cont}/delete/content', [App\Http\Controllers\NewsController::class, 'destroy_cont'])->name('delete_news_cont');

        Route::post('/remove_news_tag', [App\Http\Controllers\NewsController::class, 'remove_news_tag'])->name('remove_news_tag');
        Route::post('/remove_news_category', [App\Http\Controllers\NewsController::class, 'remove_news_category'])->name('remove_news_category');
    });

    Route::middleware('auth')->prefix('/galleries')->group(function () {
        Route::get('', [App\Http\Controllers\GalleryController::class, 'index'])->name('galleries');
        Route::get('/create', [App\Http\Controllers\GalleryController::class, 'create'])->name('show_create_gallery');
        Route::post('/create', [App\Http\Controllers\GalleryController::class, 'store'])->name('store_gallery');
        Route::get('/{gallery}/gallery-info', [App\Http\Controllers\GalleryController::class, 'edit'])->name('show_edit_gallery');
        Route::post('/{gallery}/gallery-info', [App\Http\Controllers\GalleryController::class, 'update'])->name('update_gallery');

        Route::post('/{gallery}/delete/', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('delete_gallery');
        Route::post('/{img}/delete/image', [App\Http\Controllers\GalleryController::class, 'destroy_cont'])->name('delete_gallery_cont');
    });

    Route::middleware('auth')->prefix('/faqs')->group(function () {
        Route::get('', [App\Http\Controllers\FaqController::class, 'index'])->name('faqs');
        Route::get('/create', [App\Http\Controllers\FaqController::class, 'create'])->name('show_create_faq');
        Route::post('/create', [App\Http\Controllers\FaqController::class, 'store'])->name('store_faq');
        Route::get('/{faq}/faq-info', [App\Http\Controllers\FaqController::class, 'edit'])->name('show_edit_faq');
        Route::post('/{faq}/faq-info', [App\Http\Controllers\FaqController::class, 'update'])->name('update_faq');

        Route::post('/{faq}/delete/', [App\Http\Controllers\FaqController::class, 'destroy'])->name('delete_faq');
    });

    Route::middleware('auth')->prefix('/spaces')->group(function () {
        Route::get('', [App\Http\Controllers\SpaceController::class, 'index'])->name('spaces');
        Route::get('/create', [App\Http\Controllers\SpaceController::class, 'create'])->name('show_create_space');
        Route::post('/create', [App\Http\Controllers\SpaceController::class, 'store'])->name('store_space');
        Route::get('/{space}/space-info', [App\Http\Controllers\SpaceController::class, 'edit'])->name('show_edit_space');
        Route::post('/{space}/space-info', [App\Http\Controllers\SpaceController::class, 'update'])->name('update_space');

        Route::get('/{space}/space-info/bookings', [App\Http\Controllers\BookingController::class, 'space_bookings'])->name('space.bookings');

        Route::post('/{space}/delete/', [App\Http\Controllers\SpaceController::class, 'destroy'])->name('delete_space');
    });

    Route::middleware('auth')->prefix('/communities')->group(function () {
        Route::get('', [App\Http\Controllers\CommunityController::class, 'index'])->name('communities');
        Route::get('/create', [App\Http\Controllers\CommunityController::class, 'create'])->name('show_create_community');
        Route::post('/create', [App\Http\Controllers\CommunityController::class, 'store'])->name('store_community');
        Route::get('/{community}/community-info', [App\Http\Controllers\CommunityController::class, 'edit'])->name('show_edit_community');
        Route::post('/{community}/community-info', [App\Http\Controllers\CommunityController::class, 'update'])->name('update_community');

        Route::post('/{community}/delete/', [App\Http\Controllers\CommunityController::class, 'destroy'])->name('delete_community');
    });

    Route::middleware('auth')->prefix('/neighbors')->group(function () {
        Route::get('', [App\Http\Controllers\NeighborController::class, 'index'])->name('neighbors');
        Route::get('/create', [App\Http\Controllers\NeighborController::class, 'create'])->name('show_create_neighbor');
        Route::post('/create', [App\Http\Controllers\NeighborController::class, 'store'])->name('store_neighbor');
        Route::get('/{neighbor}/neighbor-info', [App\Http\Controllers\NeighborController::class, 'edit'])->name('show_edit_neighbor');
        Route::post('/{neighbor}/neighbor-info', [App\Http\Controllers\NeighborController::class, 'update'])->name('update_neighbor');

        Route::post('/{neighbor}/delete/', [App\Http\Controllers\NeighborController::class, 'destroy'])->name('delete_neighbor');
    });

    Route::middleware('auth')->prefix('/messages')->group(function () {
        Route::get('', [App\Http\Controllers\MessageController::class, 'index'])->name('messages');
        Route::get('/{user}', [App\Http\Controllers\MessageController::class, 'show'])->name('show_single_messages');

        Route::get('/{user}/ajax', [App\Http\Controllers\MessageController::class, 'showAjax']);
        // Route::get('/create', [App\Http\Controllers\SpaceController::class, 'create'])->name('show_create_space');
        // Route::post('/create', [App\Http\Controllers\SpaceController::class, 'store'])->name('store_space');
        // Route::get('/{space}/space-info', [App\Http\Controllers\SpaceController::class, 'edit'])->name('show_edit_space');
        // Route::post('/{space}/space-info', [App\Http\Controllers\SpaceController::class, 'update'])->name('update_space');

        // Route::post('/{space}/delete/', [App\Http\Controllers\SpaceController::class, 'destroy'])->name('delete_space');
    });
});

// Main Routes
Route::prefix('')->group(function () {
// home
Route::get('', [MainController::class, 'index'])->name('main.index');
Route::get('/about-us', [MainController::class, 'about_us'])->name('main.aboutus');
Route::get('/foundation', [MainController::class, 'foundation'])->name('main.foundation');
// blogs
Route::get('/blogs', [MainController::class, 'blog'])->name('main.blog');
Route::get('/blogs/category/{cat_name}', [MainController::class, 'category_blog'])->name('main.category_blog');
Route::get('/blogs/tag/{tag_name}', [MainController::class, 'tag_blog'])->name('main.tag_blog');
Route::get('/blogs/{title}', [MainController::class, 'single_blog'])->name('main.single_blog');
Route::post('/blogs/{news}/comment', [MainController::class, 'blog_comment'])->name('main.blog_comment');

Route::get('/gallery', [MainController::class, 'gallery'])->name('main.gallery');
Route::get('/gallery/{gallery}', [MainController::class, 'single_gallery'])->name('main.single_gallery');
Route::get('/coworking', [MainController::class, 'coworking'])->name('main.coworking');
Route::get('/technology-consulting', [MainController::class, 'technology_consulting'])->name('main.technology_consulting');
Route::get('/community', [MainController::class, 'community'])->name('main.community');
Route::get('/neighbors-of-the-park', [MainController::class, 'neighbors_of_the_park'])->name('main.neighbors');
Route::get('/contact-us', [MainController::class, 'contact_us'])->name('main.contact_us');

// Route::get('/coworking', [MainController::class, 'coworking'])->name('main.coworking');

// payment
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('main.pay');
Route::post('/pay/{b_id}', [PaymentController::class, 'redirectToGateway_again'])->name('main.pay.again');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('main.payment_call_back');

Route::get('/booking/{b_id}', [PaymentController::class, 'success_booking'])->name('main.booking.success');
Route::get('/booking/{b_id}/not-paid', [PaymentController::class, 'failed_booking'])->name('main.booking.failed');

Route::get('/payment/get-all', [PaymentController::class, 'get_all_trans']);
Route::get('/test', function () {
    view("emails.customer_initial_pay");
});

});

// Storage files access route
Route::get('/storage/{pat}/{filename}', function ($pat, $filename) {

    $storage = Storage::disk('local')->path('public/' . $pat . '/' . $filename);

    return response()->file($storage);
});
