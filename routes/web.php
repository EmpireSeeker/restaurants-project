<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\BookingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/login",[LoginController::class,'log'])->name('log');
Route::post("/login",[SignupController::class,'login'])->name('login');
Route::get("/register",[RegisterController::class,'reg'])->name('reg');
Route::post("/register",[SignupController::class,'act'])->name('act');
Route::get("/admin",[AdminController::class,'admin'])->name('admin');

Route::get('/userboard', [UserController::class, 'land'])->name('land');

Route::get('/booking', [BookingController::class, 'create'])->name('create');
Route::post('/booking', [BookingController::class, 'store'])->name('store');


