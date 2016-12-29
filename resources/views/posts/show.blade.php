@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Post - <a href=" {{ url('/posts') }} ">back to all posts</a></div>

                <div class="panel-body">
                    <h2>{{ $post->title }}</h2>

                    <?= $post->body ?>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
