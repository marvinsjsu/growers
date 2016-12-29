@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Post - <a href=" {{ url('/posts') }} ">back to all posts</a></div>

                <div class="panel-body">

                <?= Former::open_vertical(route('posts.update', $post->id))->id('posts_edit_form')->method('PUT')->role("form") ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <?= Former::input('title')->required()->value($post->title) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                          <?= Former::textarea('body')->id('summernote')->rows(15)->required()->value($post->body) ?>
                        </div>
                    </div>
                </div>



                <div id="create_form_holder">
                    <div class="form-actions">

                        <div id="create">
                            <button type="submit" name="save-post" id="save-post" class="btn btn-primary">Save</button>
                            <button type="button" id="cancel-create-case" class="btn btn-link cancelForm" value="/posts/index">Cancel</button>
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
