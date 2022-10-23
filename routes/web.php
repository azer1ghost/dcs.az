<?php

use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TrainingController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

Auth::routes();
Localization::route();

Route::any('test-notify', function (\Illuminate\Http\Request $request){
    Notification::route('mail', $email = $request->input('email'))->notify(new \App\Notifications\TestNotify());
    return response("Notification sent to $email");
});

Route::prefix('admin')->withoutMiddleware('localization')->group(function () {
    (new Voyager)->routes();

    Route::get('groups/{group}/trainings/order', [TrainingController::class, 'ordering'])->name('groups.trainings.order');
    Route::resource('groups.trainings', TrainingController::class);
    Route::resource('groups.trainings.sessions', SessionController::class);

    Route::controller(StudentController::class)
        ->prefix('groups/{group}/trainings/{training}/sessions/{session}')
        ->group(function (){
            Route::get('students', 'index')->name('sessions.students');
            Route::post('students', 'attachStudent')->name('sessions.students.attach');
            Route::delete('students', 'detachStudent')->name('sessions.students.detach');
            Route::get('students/{student}/certificate', 'certificate')->name('sessions.students.certificate');
    });
});

Route::controller(WebsiteController::class)->group(function () {
    Route::redirect('/','home')->name('index');
    Route::get('/home', 'homepage')->name('homepage');
    Route::get('/services', 'services')->name('services');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/article/{post:slug}', 'article')->name('article');
    Route::get('/our-trainings', 'trainings')->name('trainings');
    Route::get('/our-trainings/{group:slug}', 'training')->name('training');
    Route::get('/certificate/{certificate:slug}', [CertificateController::class, 'index'])->name('certificate');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/send', 'send')->name('send');
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
