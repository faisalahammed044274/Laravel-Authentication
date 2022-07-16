<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function index()
    {

        $posts = Post::orderBY('id', 'desc')->get();
        // return view('home', ['posts' => $posts]);
        return view('index')->withPosts($posts);
    }
}
