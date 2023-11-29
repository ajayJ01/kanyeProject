<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;



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


Route::get('/', [Controller::class, 'login']);
Route::get('login', [Controller::class, 'login'])->name('login');
Route::post('loginVerify', [Controller::class, 'loginVerify'])->name('loginVerify');
Route::get('register', [Controller::class, 'register'])->name('register');
Route::post('store', [Controller::class, 'store'])->name('store');
Route::get('index', [Controller::class, 'index'])->name('index');
Route::get('logout', [Controller::class, 'logout'])->name('logout');




