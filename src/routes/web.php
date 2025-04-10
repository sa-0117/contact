<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;


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

Route::get('/', [ContactController::Class, 'index']
);
Route::post('/confirm', [ContactController::Class, 'confirm']);
Route::post('/store', [ContactController::Class, 'store']
);


Route::get('/login', [AuthController::class, 'entrance'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/admin', [AuthController::class, 'admin'])->name('admin');

