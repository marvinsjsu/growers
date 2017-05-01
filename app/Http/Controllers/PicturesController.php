<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Image;

class PicturesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pics = Picture::where('submitted_by_id', $user->id)->get();

        return view('pictures.index', ['pics' => $pics]);
    }

    public function all()
    {
        $pics = Picture::all();
        $pics->sortByDesc('created_at');

        return view('pics.all', ['pics' => $pics]);
    }

    public function show($id)
    {
        $pic = Picture::find($id);
        return view('pictures.show', ['pic' => $pic]);
//        return response()->json(['post' => $post]);
    }

    public function create()
    {
        return view('pictures.create');
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

        $request['submitted_by_id'] = Auth::user()->id;
        $request['image_url'] = $s3_original;

        $pic = Picture::create($request->all());

        return redirect()->route('pictures.index')->with('success', 'New pic uploaded: ' . $pic->title);
    }

    public function edit($id)
    {
        $pic = Picture::find($id);

        return view('pictures.edit', ['pic' => $pic]);
    }

    public function update(Request $request, $id)
    {
        $pic = Picture::find($id);
        $pic->update($request->all());

        return view('pictures.show', ['pic' => $pic]);
    }

    public function destroy($id)
    {
        $pic = Picture::find($id);
        $pic->delete();

        return redirect()->route('pictures.index')->with('success', 'Picture has been deleted: ' . $pic->title);
    }
}
