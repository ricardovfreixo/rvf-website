<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/latest',function(){
	return \App\Post::select(['title','slug','sinopse','published_at'])
		->where('published_at','<',\Carbon\Carbon::now())
		->orderBy('published_at','desc')
		->limit(10)
		->get();
});


Route::get('/users', function () {
    return factory('App\User', 10)->make();
});


