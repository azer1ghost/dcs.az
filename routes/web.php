<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

Route::get('/', [WebsiteController::class, 'homepage'])->name('homepage');

Route::get('/trainings', [WebsiteController::class, 'trainings'])->name('trainings');
Route::get('/trainings/{training:slug}', [WebsiteController::class, 'training'])->name('training');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/articles', [WebsiteController::class, 'articles'])->name('articles');
Route::get('/article/{post:slug}', [WebsiteController::class, 'article'])->name('article');

Route::get('/profile', [WebsiteController::class, 'profile'])->name('profile');

Auth::routes();
Localization::route();

Route::group(['prefix' => 'admin'], function () {
    (new Voyager())->routes();
});

Route::get('/{page:slug}', [WebsiteController::class, 'page'])->name('page');
