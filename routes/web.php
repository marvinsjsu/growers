<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [
		"as" => 'home.index',
		"uses" => 'HomeController@index'
	]);
Route::get('/blog', 'BlogsController@index');
Route::post('/subscribe/store', [
		"as" => 'subscribe.store',
		"uses" => 'SubscriptionsController@store'
	]);
Route::get('/subscribe/activate/{id}', [
		"as" => 'subscribe.activate',
		"uses" => 'SubscriptionsController@activate'
	]);

Route::get('/test/{view}', 'SubscriptionsController@test');
//Route::get('/stories', 'StoriesController@index');


Route::group(['middleware' => 'auth'], function() {

	/**
	 * Routes for Posts
	 */
	Route::resource('posts', 'PostsController', ['only' => [
    	'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
	]]);

	Route::get('posts/{id}/edit', 'PostsController@edit');
	Route::post('posts/{id}/update', 'PostsController@update');	
	Route::post('posts/{id}/publish', [
			"as" => 'posts.publish',
			"uses" => 'PostsController@publish'
		]);

	/**
	 * Routes for Comments
	 */
	Route::resource('comments', 'CommentsController', ['only' => [
    	'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
	]]);
});