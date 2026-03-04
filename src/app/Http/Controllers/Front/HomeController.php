<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();

        $posts = Post::with('translation')
            ->whereHas('translation')
            ->latest()
            ->take(5)
            ->get();

        return view('front.home', compact('posts'));
    }
}
