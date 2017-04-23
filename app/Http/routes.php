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

Route::get('/', "StaticPagesController@home");
Route::get('/notes', "StaticPagesController@notes");
Route::get('/pdf', "StaticPagesController@pdf");

//notes
Route::get('/notes/{types}/{series}/{title}', 'NotesController@show');
