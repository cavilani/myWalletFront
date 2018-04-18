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

/*Route::get('/', 'HomeController@home' )->middleware('auth');

Route::post('login', 'LoginController@login');*/

Route::get('/', function(){
	return view('demo',['title' => 'my app']);
});

Route::get('/login', function(){
	return view('login',['title' => 'Login','scriptsJs' => [URL::asset('js/login.js')]]);
});


Route::post('/loginSubmit', function(){

	return Response::json(["success"]);
});
