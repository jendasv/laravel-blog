<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function show($locale, $slug)
    {
        app()->setLocale($locale);

        $post = Post::where('slug', $slug)->firstOrFail();
        $translation = $post->translate($locale);

        return view('front.posts.show', compact('post','translation'));
    }
}
