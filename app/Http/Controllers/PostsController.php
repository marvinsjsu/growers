<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('author_id', $user->id)->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        dd($request);
        $request['author_id'] = Auth::user()->id;
        $post = Post::create($request->all());    

        return view('posts.show', ['post' => $post]);    
    }

    public function edit($id) 
    {
        $post = Post::find($id);

        return view('post.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return view('posts.show', ['post' => $post]);
    }

    public function destroy($id)
    {
    	$post = Post::find($id);
        $post->delete();
    }
}
