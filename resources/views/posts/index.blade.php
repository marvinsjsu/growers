@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                                    <?= Former::horizontal_open(route('posts.destroy', $post->id))->id('posts_edit_form')->method("DELETE") ?>
                                    <a class="btn-link" href="{{ route('posts.edit', $post->id) }}">Edit</a> 
                                    <button type="submit" name="delete-post" id="delete-post" class="btn-link">Delete</button>
                                    <?= Former::close() ?>
                                    <?= Former::horizontal_open(route('posts.publish', $post->id))->id('posts_edit_form')->method("POST") ?>
                                                                        
                                        @if ($post->status == "draft")
                                            <button type="submit" name="publish-post" id="publish-post" class="btn-link">Publish</button>
                                        @else 
                                            <button type="submit" name="unpublish-post" id="unpublish-post" class="btn-link">Un-publish</button>
                                        @endif
                                    <?= Former::close() ?>
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
