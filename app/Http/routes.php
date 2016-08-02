<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('contact', ['as' => 'contact', function() { return view('contact'); }]);
$app->get('resume', ['as' => 'resume', function() { return view('resume'); }]);
// TODO, move this into a Controller.  This doesn't 404 properly
$app->get('portfolio/{project}', function($project) { return view('portfolio/' . $project); });
$app->get('portfolio', ['as' => 'portfolio', function() { return view('portfolio'); }]);
$app->get('skills', ['as' => 'skills', function() { return view('skills'); }]);
$app->get('/', ['as' => 'home', function() { return view('home'); }]);