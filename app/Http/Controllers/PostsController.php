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
//        return response()->json(['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
//        return response()->json(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request['author_id'] = Auth::user()->id;
        $request['status'] = "draft";
        $request['type'] = "blog";
        $post = Post::create($request->all());    

        return redirect()->route('posts.index')->with('success', 'New post created: ' . $post->title);   
    }

    public function edit($id) 
    {
        $post = Post::find($id);

        return view('posts.edit', ['post' => $post]);
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

        return redirect()->route('posts.index')->with('success', 'Post has been deleted: ' . $post->title); 
    }

    public function publish($id)
    {
        $post = Post::find($id);
        
        if ($post->status == "draft") {
            $post->status = "publish";
        } else {
            $post->status = "draft";
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post has been ' . $post->status);            
    }
}
