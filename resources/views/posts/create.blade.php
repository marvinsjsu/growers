@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>

                <div class="panel-body">
                    <form>
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="body">Content</label>
                        <textarea class="form-control" rows="3" id="summernote" data-provide="markdown"></textarea>
                      </div>                      
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="status"> Status
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
