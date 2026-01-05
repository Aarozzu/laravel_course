<?php

use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/usersignup', [UserController::class, 'showsignup'])->name('usersignup');
Route::post('/usersignup', [UserController::class, 'store'])->name('usersignup.create');

Route::get('/userlogin', [UserController::class, 'showlogin'])->name('userlogin');
Route::post('/userlogin', [UserController::class, 'login'])->name('loginuser');

Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout');


Route::middleware('auth')->group(function () {

    Route::get(('/category/show'), [PostCategoryController::class, 'create'])->name('category.show');
    Route::post(('/category/store'),[PostCategoryController::class, 'store'])->name('category.store');

    
});