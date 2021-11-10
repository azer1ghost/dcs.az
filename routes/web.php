<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

Route::get('/', [WebsiteController::class, 'homepage'])->name('homepage');

Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/articles', [WebsiteController::class, 'articles'])->name('articles');
Route::get('/article/{post:slug}', [WebsiteController::class, 'article'])->name('article');
Route::get('/trainings', [WebsiteController::class, 'trainings'])->name('trainings');
Route::get('/trainings/{training:slug}', [WebsiteController::class, 'training'])->name('training');
Route::get('/certificate/{certificate:slug}', [CertificateController::class, 'index'])->name('certificate');
Route::post('/subscribe', [WebsiteController::class, 'subscribe'])->name('subscribe');
Route::get('/unsubscribe/{email}', [WebsiteController::class, 'unsubscribe'])->name('unsubscribe');

Route::middleware( 'auth')->group(function () {
    Route::get('/profile', [WebsiteController::class, 'profile'])->name('profile');
    Route::post('/profile', [WebsiteController::class, 'updateProfile']);
    Route::get('/trainings/{training:slug}/subscribe', [WebsiteController::class, 'trainingSubscribe'])->name('trainingSubscribe');
    Route::get('/trainings/{training:slug}/unsubscribe', [WebsiteController::class, 'trainingUnsubscribe'])->name('trainingUnsubscribe');
});

Auth::routes();
Localization::route();

Route::group(['prefix' => 'admin'], function () {
    (new Voyager())->routes();
});

Route::get('/{page:slug}', [WebsiteController::class, 'page'])->name('page');
