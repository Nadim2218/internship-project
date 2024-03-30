<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

// profile route

route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
route::post('/profile/photo/upload', [ProfileController::class, 'profile_photo_upload'])->name('profile_photo');
route::post('/password/change', [ProfileController::class, 'password_change']);
route::post('/name/change', [ProfileController::class, 'name_change']);
route::post('/email/change', [ProfileController::class, 'email_change']);

// users

route::get('/users', [UserController::class, 'users']);
route::get('/user/delete/{user_id}', [UserController::class, 'user_delete'])->name('user.delete');



// category

route::get('/category', [CategoryController::class, 'category'])->name('category');
route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
