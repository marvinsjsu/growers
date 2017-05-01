@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Picture - <a href=" {{ url('/pictures') }} ">back to all of my pictures</a></div>

                    <div class="panel-body">

                        <?= Former::vertical_open_for_files(route('posts.store'))
                                ->id('posts_create_form')
                                ->method('POST')
                                ->role("form")
                                ->rules(array("image" => "image"))
                        ?>
                        {{ csrf_field() }}
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
                                    <?= Former::textarea('caption')->required()->rows(3)->required() ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <?= Former::file('image')->required() ?>
                                </div>
                            </div>
                        </div>
                        <div id="create_form_holder">
                            <div class="form-actions">

                                <div id="create">
                                    <button type="submit" name="create-setting" id="create-setting" class="btn btn-primary">Create</button>
                                </div>
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
