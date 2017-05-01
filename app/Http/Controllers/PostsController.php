<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Image;

class PostsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('author_id', $user->id)->get();

        return view('posts.index', ['posts' => $posts]);
//        return response()->json(['posts' => $posts]);
    }

    public function all()
    {
        $posts = Post::where('status', 'publish')->get();
        $posts->sortByDesc('created_at');

        $modified_posts = $posts->map(function($post, $key) {
            $post->summary = implode(" ", array_slice(explode(" ", $post->summary), 0, 35));
            return $post;
        });

        return view('posts.all', ['posts' => $modified_posts]);
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
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
        $image = $request->file('image');

        $t = Storage::disk('s3')->put($imageName, file_get_contents($image), 'public');
        $s3_original = Storage::disk('s3')->url($imageName);


        $resizedImage = Image::make('images/banner.jpg');

//        dd($resizedImage);
//
//        $resizedImageName = time().'_300x200.'.$request->file('image')->getClientOriginalExtension();
//        $t = Storage::disk('s3')->put($resizedImageName, file_get_contents($resizedImage), 'public');
//        $s3_300x200 = Storage::disk('s3')->url(resizedImageName);





//        dd($imageName);

        $request['author_id'] = Auth::user()->id;
        $request['status'] = "draft";
        $request['type'] = "blog";
        $request['image_url'] = $s3_original;
//        $request['resized_url'] = $s3_300x200;

        $post = Post::create($request->all());

//        $imageName = $post->id . '.' . $request->file('image')->getClientOriginalExtension();
//        $request->file('image')->move(
//            base_path() . '/public/images/catalog/', $imageName
//        );

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
