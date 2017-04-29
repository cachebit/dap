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
Route::get('/laracasts', "StaticPagesController@laracasts");
Route::get('/laravel-from-scrach-2017', "StaticPagesController@promote")->name('promote');

//users
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

//session
Route::get('signin', 'SessionController@create')->name('signin');
Route::post('signin','SessionController@store')->name('signin');
Route::delete('signout','SessionController@destroy')->name('signout');


//password reset
Route::get('password/email', 'Auth\PasswordController@getEmail')->name('password.reset');
Route::post('password/email', 'Auth\PasswordController@postEmail')->name('password.reset');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('password.edit');
Route::post('password/reset', 'Auth\PasswordController@postReset')->name('password.update');

//types
Route::get('/notes/{types}', 'TypesController@index');

//tags
Route::get('/tags/{types}', 'TagsController@index');

//series
Route::get('/notes/{types}/{series}', 'SeriesController@index');

//notes
Route::get('/notes/{types}/{series}/{title}', 'NotesController@show');



//pdfs
Route::get('/pdfs/laravel/laravel_fundamentals_chinese', function(){
  return view('pdfs.laravel.laravel_fundamentals_chinese');
});
