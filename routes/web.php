<?php

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

Route::get('/',[App\Http\Controllers\MainController::class,'MainPage'])->name('homepage');

Auth::routes(['verify' => true]); 

Route::post('/store',[App\Http\Controllers\MainController::class,'registerUser'])->name('reg.page');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',[App\Http\Controllers\UserController::class,'userDashboard'])->name('home');
