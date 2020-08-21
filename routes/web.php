<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => \UriLocalizer::localeFromRequest()], function(){

    Route::get('/', 'PageController@index')->name('Homepage');

    Route::get('/pages/{slug}', 'PageController@getPage')->name('Page');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});

