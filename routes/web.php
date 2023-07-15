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
Route::get('/AddAccount', [AccountController::class, 'AddAccount']);
Route::get('/EditAccount/{account:username}', [AccountController::class, 'EditAccount']);
Route::get('/LihatAccount/{account:username}', [AccountController::class, 'LihatAccount']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/AddPost', [PostController::class, 'AddPost']);
Route::get('/EditPost', [PostController::class, 'EditPost']);
Route::get('/LihatPost/{post:idpost}', [PostController::class, 'LihatPost']);
