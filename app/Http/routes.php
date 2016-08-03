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

Route::get('contact', ['as' => 'contact', function() { return view('contact'); }]);
Route::get('resume', ['as' => 'resume', function() { return view('resume'); }]);
// TODO, move this into a Controller.  This doesn't 404 properly
Route::get('portfolio/{project}', function($project) { return view('portfolio/' . $project); });
Route::get('portfolio', ['as' => 'portfolio', function() { return view('portfolio'); }]);
Route::get('skills', ['as' => 'skills', function() { return view('skills'); }]);
Route::get('/', ['as' => 'home', function() { return view('home'); }]);