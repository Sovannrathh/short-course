<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/h', function () {
    return view('homepage');
});

Route::get('/coursepage', function () {
    return view('coursepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/coursedetails', function () {
    return view('coursedetails');
});

// Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
// Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');


Route::get('/notification', function () {
    return view('notification');
});

Route::get('/test', function () {
    return view('test');
});