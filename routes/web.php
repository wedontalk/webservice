<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admintrator','middleware'=>['checkAdmin','auth']], function(){
    Route::get('/',[App\Http\Controllers\adminController::class,'index'])->name('admin.dashboard');
});



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\HomeController::class, 'category'])->name('category');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile_user'])->name('profile');

Auth::routes();

