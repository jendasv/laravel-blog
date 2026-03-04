<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('translations')
            ->latest()
            ->paginate(10);

        return view('admin.post.index', compact('posts'));
    }
}
