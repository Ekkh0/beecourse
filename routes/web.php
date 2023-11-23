<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\CourseController;
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

Route::get('/', [CourseController::class,'index'])->name('home');
Route::get('/Courses', [CourseController::class,'pagecourses'])->name('course');

Route::get('/nlp', function () {
    return view('nlp');
});

Route::get('/login', [SessionController::class, 'index']);
Route::get('/logout', [SessionController::class, 'logout']);
Route::post('/login', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/create', [SessionController::class, 'create']);

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/account', function () {
    return view('account');
});

