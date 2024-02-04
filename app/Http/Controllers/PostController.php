<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'posts',
            'posts' => Post::all()
        ]); 
    }

    public function show(Post $post)
    {
        
        return view('post', [
            "title" => "laravel anjing",
            'post' => $post

        ]);
    }
}
