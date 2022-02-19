<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

Auth::routes();
Localization::route();

Route::prefix('admin')->withoutMiddleware('localization')->group(function () {
    (new Voyager)->routes();
});

Route::controller(WebsiteController::class)->group(function () {
    Route::redirect('/','home')->name('index');
    Route::get('/home', 'homepage')->name('homepage');
    Route::get('/services', 'services')->name('services');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/article/{post:slug}', 'article')->name('article');
    Route::get('/trainings', 'trainings')->name('trainings');
    Route::get('/trainings/{training:slug}', 'training')->name('training');
    Route::get('/certificate/{certificate:slug}', [CertificateController::class, 'index'])->name('certificate');
    Route::post('/subscribe', 'subscribe')->name('subscribe');
    Route::get('/unsubscribe/{email}', 'unsubscribe')->name('unsubscribe');
    Route::middleware( 'auth')->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile', 'updateProfile');
        Route::get('/trainings/{training:slug}/subscribe', 'trainingSubscribe')->name('trainingSubscribe');
        Route::get('/trainings/{training:slug}/unsubscribe', 'trainingUnsubscribe')->name('trainingUnsubscribe');
    });
    Route::get('/{page:slug}', 'page')->name('page');
});
