<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'publish')->orderBy('created_at', 'desc')->get();

        return view('blogs.index', ['posts' => $posts]);
    }
}
