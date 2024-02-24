<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/registration',[AccountController::class,'registration']);
Route::post('/registrationprocess',[AccountController::class,'ProcessRegistration'])->name('account.process');
Route::get('/login',[AccountController::class,'login'])->name('login');
