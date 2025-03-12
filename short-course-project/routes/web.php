<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VideoController;

Route::get('/payment', function () {
    return view('/payment/payment');
})->name('payment');

Route::get('/card', function () {
    return view('/payment/card');
})->name('card');

Route::get('/success', function () {
    return view('/payment/success');
});
Route::get('/', function () {
    return view('mainpage');
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

Route::get('/dashboard', function () {
    return view('./dashboard/admin');
})->name('dashboard');
Route::view('/dashboard_course', './dashboard/course')->name('dashboard_course');
Route::view('/dashboard_new_course', './dashboard/new_course')->name('dashboard_new_course');

Route::get('/test', function () {
    return view('test');
});
Route::get('/coursevideo', function () {
    return view('courses/coursevideo');
})->name('coursevideo');

Route::get('/page1', function () {
    return view('courses/page1');
})->name('page1');

Route::get('/page2', function () {
    return view('courses/page2');
})->name('page2');

Route::get('/quiz', function () {
    return view('courses/quiz');
})->name('quiz');

Route::get('/coursepay', function () {
    return view('courses/coursepay');
})->name('coursepay');

Route::get('/page3', function () {
    return view('courses/page3');
})->name('page3');