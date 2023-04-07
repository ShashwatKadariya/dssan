<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ClientSideController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/', [ClientSideController::class, 'home']);
    Route::get('/alumni', [ClientSideController::class, 'batch']);
    Route::get('/alumni/{slug}', [ClientSideController::class, 'alumni']);
    Route::get('/news&events', [ClientSideController::class, 'news_events']);
    Route::get('/all_news', [ClientSideController::class, 'allnews']);
    Route::get('/article/{slug}', [ClientSideController::class, 'article']);
    Route::get('/all_events', [ClientSideController::class, 'allevents']);
    Route::post('/message', [ClientSideController::class, 'feedback']);
    Route::get('/gallery', function () {
        return view('users.gallery');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::resource('/team', TeamController::class);
    Route::resource('/feedback', FeedbackController::class);
    Route::resource('/batch', BatchController::class);
    Route::resource('/batch.alumni', AlumniController::class)->shallow();
    Route::resource('/events', EventController::class);
    Route::resource('/news', NewsController::class);
    Route::get('/user/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'store']);
    Route::get('/update-password', function () {
        return view('auth.update-password');
    });
});
