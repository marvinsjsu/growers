<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index', ['comments' => $comments]);
    }

    public function show($id)
    {
        $comment = Comment::find($id);
        return view('comments.show', ['comment' => $comment]);
    }

    public function create()
    {
        return view('comment.create');
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['status'] = 'red';
        $request['done'] = false;
        
        return Comment::create($request->all());        
    }

    public function edit($id) 
    {
        $post = Comment::find($id);

        return view('comment.edit', ['comment' => $comment]);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->update($request->all());

        return view('comments.show', ['comment' => $comment]);
    }

    public function destroy($id)
    {
    	$comment = Comment::find($id);
        $comment->delete();
    }
}
