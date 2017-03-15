@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h2> {{ $post->title }} </h2>
                    <br/> written by {{ $post->author->name }} on {{ $post->created_at }} 
                    <br/> (last modified: {{ $post->updated_at }})
                </div>

                <div class="panel-body">

                    <?= $post->body ?>       

                </div>
                <br/>


            </div>
        </div>
    </div>
    @endforeach 
</div>
@endsection
