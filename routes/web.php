<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', [ListingController::class, 'index']);

Route::get('/about', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});


//show register form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::get('/users', [UserController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/categoryadd', [CategoryController::class, 'create']);