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
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['status'] = 'red';
        $request['done'] = false;
        
        return Post::create($request->all());        
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
