<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Space;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $spaces = Space::orderBy('created_at', 'desc')->paginate(5);

        $availableSpaces = Space::where('isAvailable', true)->get();

        $news = News::all();

        return view('admin.home', compact('spaces', 'availableSpaces', 'news'));
    }
}