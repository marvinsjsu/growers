<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('date_entered', 'desc')->get();

        return view('blogs.index', ['posts' => $posts]);
    }
}
