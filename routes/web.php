<?php

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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/home', function () {
    return view('users.home');
});

Route::get('/about', function () {
    return view('users.about');
});

Route::get('/gallery', function () {
    return view('users.gallery');
});

Route::get('/alumni', function () {
    return view('users.alumni');
});

Route::get('/news&events', function () {
    return view('users.news&events');
});

Route::resource('/team', TeamController::class);
