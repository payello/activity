<?php
Route::get('/', 'PortfolioController@index')->name('portfolio');

Route::get('/download', 'PortfolioController@getDownload')
     ->name('download');

Route::get('/read-more/activity', 'ReadMoreController@activity')
     ->name('read-more.activity');

Route::get('/read-more/currency', 'ReadMoreController@currency')
     ->name('read-more.currency');

Route::get('/read-more/suggestions', 'ReadMoreController@suggestions')
     ->name('read-more.suggestions');

Route::get('/read-more/born-to-be', 'ReadMoreController@bornToBe')
     ->name('read-more.born-to-be');

Route::get('/read-more/tgc', 'ReadMoreController@tgc')
     ->name('read-more.tgc');

Route::get('currency', 'CurrencyController@index')
     ->name('currency');

Route::group([
    'prefix' => 'travel',
    'namespace' => 'Travel',
], function ()
{
    Route::get('/', 'PostController@index')
        ->name('home');

    Route::get('/about', 'AboutController@index')
         ->name('about');

    Auth::routes();

    Route::resource('posts', 'PostController');

    Route::post('posts/{post}/comments', 'CommentController@store')
         ->name('posts.{post}.comments');

    Route::resource('activities', 'ActivityController');

    Route::get('/activities/{activity}/activity', 'ActivityController@activity')
         ->name('activity.{activity}.activity');

    Route::resource('countries', 'CountryController');
});
