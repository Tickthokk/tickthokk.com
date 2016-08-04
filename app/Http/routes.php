<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('skills', ['as' => 'skills', function() { return view('skills'); }]);
Route::get('journal', ['as' => 'journal', function() { return redirect('http://codepen.io/Tickthokk/posts/published/'); }]);
Route::get('playground', ['as' => 'playground', function() { return redirect('http://codepen.io/Tickthokk/pens/public/'); }]);
Route::get('portfolio', ['as' => 'portfolio', function() { return view('portfolio'); }]);
Route::get('inspiration', ['as' => 'inspiration', function() { return view('inspiration'); }]);
Route::get('resume', ['as' => 'resume', function() { return view('resume'); }]);
Route::get('/', ['as' => 'home', function() { return view('home'); }]);