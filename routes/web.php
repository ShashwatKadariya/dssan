<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AlumniPageController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsEventsController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'home']);
Route::resource('/alumni', AlumniPageController::class);
Route::get('/news&events', [NewsEventsController::class, 'index']);
Route::get('/all_events', [NewsEventsController::class, 'allevents']);
Route::get('/all_news', [NewsEventsController::class, 'allnews']);
Route::get('/article/{id}', [NewsEventsController::class, 'article']);

Route::get('/gallery', function () {
    return view('users.gallery');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('/team', TeamController::class);
Route::resource('/fact', FactController::class);
Route::resource('/feedback', FeedbackController::class);
Route::resource('/batch', BatchController::class);
Route::get('/alumni/create/{id}', [AlumniController::class, 'create'])->name('alumni.create');
Route::post('/alumni/store/{id}', [AlumniController::class, 'store'])->name('alumni.store');
Route::get('/alumni/edit/{id}', [AlumniController::class, 'edit'])->name('alumni.edit');
Route::post('/alumni/update/{id}', [AlumniController::class, 'update'])->name('alumni.update');
Route::delete('/alumni/destroy/{id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');
Route::resource('/events', EventController::class);
Route::resource('/news', NewsController::class);
