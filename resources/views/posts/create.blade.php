@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Post - <a href=" {{ url('/posts') }} ">back to all posts</a></div>

                <div class="panel-body">
                  <!--
                    <form accept-charset="utf-8" class="form-vertical" id="posts_create_form" role="form" method="POST" action="http://homestead.growers/posts">
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
                  
                  -->

                <?= Former::open_vertical(route('posts.store'))->id('posts_create_form')->method('POST')->role("form") ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <?= Former::input('title')->required() ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <?= Former::textarea('body')->id('summernote')->rows(15)->required() ?>
                        </div>
                    </div>
                </div>



                <div id="create_form_holder">
                    <div class="form-actions">

                        <div id="create">
                            <button type="submit" name="create-setting" id="create-setting" class="btn btn-primary">Create</button>
                            <button type="button" id="cancel-create-case" class="btn btn-link cancelForm" value="/admin/settings">Cancel</button>
                        </div>
                        <div id="create_holder" class="btn btn-info hide">
                            Saving
                            <div class="loading"><span class="l1"></span><span class="l2"></span><span class="l3"></span></div>
                        </div>
                    </div>
                    <div class="clear">&nbsp;</div>
                </div>

                <?= Former::close() ?>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
