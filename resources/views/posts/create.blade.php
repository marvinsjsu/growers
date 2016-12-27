@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>

                <div class="panel-body">
                  <div id="summernote"><p>Hello Summernote</p></div>
                    <form>
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="body">Content</label>
                        <textarea class="form-control" rows="3" id="body" data-provide="markdown"></textarea>
                      </div>                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>                               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
