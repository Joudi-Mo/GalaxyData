<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ratingController;
use GuzzleHttp\Middleware;

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
Route::post('/', [ratingController::class, 'likedislike']);

Route::get('/about', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

//show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);

//show article add form
Route::get('/articleaddpage', [ListingController::class, 'create'])->middleware('auth');

// store article
Route::post('/articleadd', [ListingController::class, 'store']);

// delete single user in admin panel
Route::delete('/user/{id}', [ListingController::class, 'destroyUser']);

// delete single article
Route::delete('/listing/{id}', [ListingController::class, 'destroy']);

//delete all articles of one user
Route::delete('/listings', [ListingController::class, 'destroyAll']);

// delete single article
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//show auth login form
Route::post('/loginauth', [UserController::class, 'auth']);

Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'admin',
    ], function () {
        Route::get('/category', [CategoryController::class, 'index']);



        Route::get('/users', [UserController::class, 'index']);

        Route::get('/categoryadd', [CategoryController::class, 'create']);

        Route::post('/categoryaddverwerk', [CategoryController::class, 'store']);
    });
});

Route::get('/myarticles', [UserController::class, 'showArticles'])->middleware('auth');


Route::post('/like', 'LikeController@like')->name('like');
Route::post('/dislike', 'LikeController@dislike')->name('dislike');