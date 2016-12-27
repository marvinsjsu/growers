@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @foreach ($posts as $post)
                <div class="panel-heading">
                    {{ $post->title }} 
                    <br/> by {{ $post->author }} on {{ $post->date_entered }} 
                    <br/> last modified: {{ $post->date_modified}}
                </div>

                <div class="panel-body">
                    {{ $post->body }}                                      
                </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
@endsection
