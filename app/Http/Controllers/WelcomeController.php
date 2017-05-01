<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class WelcomeController extends Controller
{

    public function index()
    {
        $posts = Post::where('status', 'publish')->get();
        $posts->sortByDesc('created_at');
        $sliced_posts = $posts->slice(0, 4);

        $modified_posts = $sliced_posts->map(function($post, $key) {
            $post->summary = implode(" ", array_slice(explode(" ", $post->summary), 0, 35));
            return $post;
        });
        return view('welcome', ['posts' => $modified_posts]);
    }
}
