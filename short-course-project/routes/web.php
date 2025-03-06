<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VideoController;

Route::get('/payment', function () {
    return view('/payment/payment');
})->name('payment');

Route::get('/qr', function () {
    return view('/payment/qr');
});

Route::get('/card', function () {
    return view('/payment/card');
})->name('card');

Route::get('/success', function () {
    return view('/payment/success');
});
Route::get('/h', function () {
    return view('homepage');
});

Route::get('/coursepage', function () {
    return view('courses/coursepage');
})->name('showcourse');

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/coursedetails', function () {
    return view('courses/coursedetails');
})->name('coursedetails');

// Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
// Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');


Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/test', function () {
    return view('test');
});