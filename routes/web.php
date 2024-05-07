<?php

use App\Http\Middleware\LoginCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasswordController;

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

Route::get('/', [AdminController::class, 'login'])->name('admins.login')->middleware(LoginCheck::class);

Route::get('/admins/login', [AdminController::class,'login'])->name('admins.login')->middleware(LoginCheck::class);
Route::get('/admins/logout', [AdminController::class,'logout'])->name('admins.logout');
Route::post('/admins/authentication', [AdminController::class,'authentication'])->name('admins.authentication');

Route::post('/admins/get_link', [PasswordController::class,'get_link'])->name('admins.get_link');
Route::get('/admins/forgot_password', [PasswordController::class,'forgot_password'])->name('admins.forgot_password');

Route::get('/admins/reset_link/{token}', [PasswordController::class,'reset_link'])->name('admins.reset_link');
Route::post('/admins/reset_password', [PasswordController::class,'reset_password'])->name('admins.reset_password');


Route::get('/admins/index', [AdminController::class,'index'])->name('admins.index');
Route::get('/admins/profile', [AdminController::class,'profile'])->name('admins.profile');

Route::post('/admins/change_password', [AdminController::class,'change_password'])->name('admins.change_password');
Route::post('/admins/update', [AdminController::class,'update'])->name('admins.update');