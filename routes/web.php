<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => \UriLocalizer::localeFromRequest()], function(){

    Route::get('/', 'PageController@index')->name('Homepage');

    Route::get('/pages/{slug}', 'PageController@getPage')->where('slug', '([A-Za-z0-9\-\/]+)')->name('Page');

    Route::get('/blog', 'BlogController@index')->name('Blog');

    Route::get('/blog/search/{slug?}', 'BlogController@search')->name('Search');

    Route::get('/blog/category/{slug}', 'BlogController@category')->name('Category');

    Route::get('/blog/post/{slug}', 'BlogController@post')->where('slug', '([A-Za-z0-9\-\/]+)')->name('Post');


    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});

