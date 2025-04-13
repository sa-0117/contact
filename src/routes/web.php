<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
)->name('index');
Route::post('/confirm', [ContactController::Class, 'confirm']);
Route::post('/store', [ContactController::Class, 'store']);

Route::get('/login', [AuthController::class, 'entrance'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'show'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');





