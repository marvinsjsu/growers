@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    My  Posts - 
                    <a href="{{ url('posts/create') }}">Create a Post</a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Created On</td>
                                <td>Last Updated On</td>
                                <td>Status</td>
                                <td>Controls</td>
                            </tr>
                        </thead>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>{{ $post->status }}</td>
                                <td>

                                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a> |
                                    <a href="{{ route('posts.destroy', $post->id) }}">Delete</a> |
                                    @if ($post->status == "draft")
                                        <a href="">Publish</a>
                                    @else 
                                        <a href="">Un-publish</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach                        
                    </table>                                        
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection
