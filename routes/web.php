<?php

use App\Http\Controllers\CategoryController;
use App\Http\Middleware\AdminAuthentication;
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


// ADMIN Routes..................................................................................

// Route::post('/admin/authentication', [AdminController::class, 'authentication'])->name('admin.authentication')->middleware('throttle:3,2');
Route::post('/admin/authentication', [AdminController::class, 'authentication'])->name('admin.authentication');

Route::post('/admin/get_link', [PasswordController::class, 'get_link'])->name('admin.get_link');
Route::get('/admin/forgot_password', [PasswordController::class, 'forgot_password'])->name('admin.forgot_password');

Route::get('/admin/reset_link/{token}', [PasswordController::class, 'reset_link'])->name('admin.reset_link');
Route::post('/admin/reset_password', [PasswordController::class, 'reset_password'])->name('admin.reset_password');

Route::middleware([LoginCheck::class])->group(function () {
    Route::get('/', [AdminController::class, 'login']);
    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
});

Route::middleware([AdminAuthentication::class])->group(function () {

    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::post('/admin/change_password', [AdminController::class, 'change_password'])->name('admin.change_password');
    Route::post('/admin/update', [AdminController::class, 'update'])->name('admin.update');

    Route::post('/admin/update_profile_image', [AdminController::class,'update_profile_image'])->name('admin.update_profile_image');




    Route::get('/admin/categories', [CategoryController::class,'categories'])->name('admin.categories');
    Route::post('/admin/addcategory', [CategoryController::class,'addcategory'])->name('admin.addcategory'); 




    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});