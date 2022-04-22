<?php

use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

Auth::routes();
Localization::route();

Route::any('hello', function (){
    Notification::route('mail', 'mamedovazer124@gmail.com')
        ->notify(new \App\Notifications\ExpiredCertificates(12));
    echo 'yup';
});

Route::prefix('admin')->withoutMiddleware('localization')->group(function () {
    (new Voyager)->routes();
    Route::controller(SessionController::class)->group(function (){
        Route::get('trainings/{training}/sessions', 'custom_index')->name('sessions');
        Route::get('trainings/{training}/sessions/create', 'create')->name('sessions.create');
    });
    Route::controller(StudentController::class)->group(function (){
        Route::get('trainings/{training}/sessions/{session}/students', 'index')->name('sessions.students');
        Route::post('trainings/{training}/sessions/{session}/students', 'attachStudent')->name('sessions.students.attach');
        Route::delete('trainings/{training}/sessions/{session}/students', 'detachStudent')->name('sessions.students.detach');
        Route::get('trainings/{training}/sessions/{session}/students/{student}/certificate', 'certificate')->name('sessions.students.certificate');
    });
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
    Route::middleware( 'auth:student')->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::post('/profile', 'updateProfile');
        Route::get('/trainings/{training:slug}/subscribe/{session}', 'trainingSubscribe')->name('trainingSubscribe');
        Route::get('/trainings/{training:slug}/unsubscribe', 'trainingUnsubscribe')->name('trainingUnsubscribe');
    });
    Route::get('/{page:slug}', 'page')->name('page');
});

