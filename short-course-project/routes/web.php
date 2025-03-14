<?php
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VideoController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
// .
// Map_payment
// .
Route::get('/payment', function () {
    return view('/payment/payment');
})->name('payment');

Route::get('/card', function () {
    return view('/payment/card');
})->name('card');

Route::get('/success', function () {
    return view('/payment/success');
});
// .
// 
// .
Route::get('/', function () {
    return view('mainpage');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


// Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
// Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');


Route::get('/notification', function () {
    return view('notification');
})->name('notification');
// .
// Map_dashboard
// .
Route::get('/dashboard', function () {
    return view('./dashboard/admin');
})->name('dashboard');
Route::view('/dashboard/courses', './dashboard/course')->name('dashboard_course');
Route::view('/dashboard/courses/new_course', './dashboard/new_course')->name('dashboard_new_course');
Route::get('/dashboard/profile', function () {
    return view('./dashboard/admin_profile');
})->name('dashboard_admin_profile');
// .
// 
// .


// .
// Map_course 
// .
Route::get('/courses', function () {
    return view('courses/coursepage');
})->name('showcourse');

Route::get('courses/coursedetails', function () {
    return view('courses/coursedetails');
})->name('coursedetails');

Route::get('courses/coursepay', function () {
    return view('courses/coursepay');
})->name('coursepay');

Route::get('courses/coursepay/coursevideo', function () {
    return view('courses/coursevideo');
})->name('coursevideo');

Route::get('/page1', function () {
    return view('courses/page1');
})->name('page1');

Route::get('/page2', function () {
    return view('courses/page2');
})->name('page2');

Route::get('courses/coursepay/quiz', function () {
    return view('courses/quiz');
})->name('quiz');


Route::get('/page3', function () {
    return view('courses/page3');
})->name('page3');
// .
// 
// .