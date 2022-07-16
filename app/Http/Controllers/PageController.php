<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function index()
    {

        $posts = Post::orderBY('id', 'desc')->get();
        return view('index')->withPosts($posts);
        // return view('index', ['posts' => $posts]);
    }
}
