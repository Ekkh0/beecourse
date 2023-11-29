<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DetailCourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Searchcont;

use App\Http\Controllers\CartController;

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
Route::get('/About', [CourseController::class,'about'])->name('about');

Route::get('/pythoncourse', function () {
    return view('pythoncourse');
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




Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{courseId}', [CartController::class, 'addToCart'])->name('cart.addToCart');
Route::post('/cart/add/{courseId}', [CartController::class, 'addToCart']);
Route::get('/cart/reset', [CartController::class, 'resetCart'])->name('cart.reset');
Route::get('/cart/delete/{courseId}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/search', [Searchcont::class, 'search']);


Route::get('/clustering-classification', [DetailCourseController::class, 'index'])->name('clustering-classification');


Route::get('/clustering-classification-content/{id}', [DetailCourseController::class, 'showContent'])->name('clustering-classification-content');

// Route::get('/clustering-classification-content/{id}', [DetailCourseController::class,'pagecontents'])->name('clustering-classification-content');
