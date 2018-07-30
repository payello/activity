<?php
Route::get('/', 'PortfolioController@index')->name('portfolio');
Route::get('/download', 'PortfolioController@getDownload');

Route::get('/read-more/activity', 'ReadMoreController@activity');
Route::get('/read-more/currency', 'ReadMoreController@currency');
Route::get('/read-more/suggestions', 'ReadMoreController@suggestions');
Route::get('/read-more/born-to-be', 'ReadMoreController@bornToBe');
Route::get('/read-more/tgc', 'ReadMoreController@tgc');
Route::get('currency', 'CurrencyController@index');

Route::group([
    'prefix' => 'travel',
    'namespace' => 'Travel'
], function () {
    Route::get('/', 'PostController@index')->name('home');
    Route::get('/about', 'AboutController@index');
    Route::get('/logout', 'Auth\LoginController@destroy');
    Auth::routes();

    Route::resource('photos', 'PhotoController');
    Route::resource('posts', 'PostController');
    Route::post('posts/{post}/comments', 'CommentController@store');

    Route::resource('activities', 'ActivityController');
    Route::get('/activities/{activity}/activity', 'ActivityController@activity');

    Route::resource('countries', 'CountryController');

});
