<?php

Route::get('/', 'PostController@index')->name('home');

Route::resource('photos', 'PhotoController');
Route::resource('posts', 'PostController');
Route::get('/about', 'AboutController@index');
Route::get('/posts/create', 'PostController@create');

Route::get('/logout', 'Auth\LoginController@destroy');

Auth::routes();

Route::post('posts/{post}/comments', 'CommentController@store');

Route::resource('activities', 'ActivityController');
Route::get('/activities/{activity}/activity','ActivityController@activity');

Route::resource('countries', 'CountryController');
