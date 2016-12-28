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
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->status }}</td>
                                <td>{{ $post->date_entered }}</td>
                                <td>{{ $post->date_modified}}</td>
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
