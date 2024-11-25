<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/formregister',[AuthController::class, 'formRegister'])->name('formRegister');
Route::post('/formregister',[AuthController::class, 'register'])->name('register');

Route::get('/formlogin',[AuthController::class, 'formLogin'])->name('formLogin');
Route::post('/formlogin',[AuthController::class, 'login'])->name('login');


Route::group(['prefix' => 'admin', 'middleware' => 'check_user', 'as' => 'admin.'], function () {
    // Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::get('/home',[HomeController::class, 'index'])->name('home');
});