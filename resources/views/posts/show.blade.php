@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">New Post - <a href=" {{ route('stories.all') }} ">back to all posts</a></div>

                <div class="panel-body">

                    <h2 class="text-center">{{ $post->title }}</h2>
                    <br/>
                    <div class="row">
                        <a href="{{ $post->image_url}}" class="image featured col-md-8 col-md-offset-2">
                            <img class="img-responsive img-fluid img-rounded" src="{{ $post->image_url }}" alt="" />
                        </a>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <p class="lead">
                            <?= $post->body ?>
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
