<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SalonController;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Route::get('/top',[MemberController::class,'top'])->name('top');

Route::get('/register',[MemberController::class,'register'])->name('register');
Route::post('/memberRegister',[MemberController::class,'memberRegister']);

Route::get('/edit',[MemberController::class,'edit']);

// Route::resource('/salon', [SalonController::class,'index']);

Route::get('/top',[App\Http\Controllers\SalonController::class,'getsalons']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
