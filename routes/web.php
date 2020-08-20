<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => \UriLocalizer::localeFromRequest()], function(){
    /* Your routes here */
    Route::get('/', function () {
        return view('welcome');
    });

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});

