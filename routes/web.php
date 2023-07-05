<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AccountController;

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

Route::get('/', function () {
    return view('welcome', [
        "title" => "Home"
    ]);
});
Route::get('/account', [AccountController::class, 'index']);
Route::get('/EditAccount', [AccountController::class, 'EditAccount']);
Route::get('/LihatAccount', [AccountController::class, 'LihatAccount']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/EditPost', [PostController::class, 'EditPost']);
Route::get('/LihatPost', [PostController::class, 'LihatPost']);
