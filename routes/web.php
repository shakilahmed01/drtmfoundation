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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//Dashboard area
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
Route::get('/indexv2', [App\Http\Controllers\DashboardController::class, 'indexv2'])->name('indexv2');
Route::get('/aboutus', [App\Http\Controllers\DashboardController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\DashboardController::class, 'service'])->name('service');
Route::get('/gallery', [App\Http\Controllers\DashboardController::class, 'gallery'])->name('gallery');
Route::get('/blog', [App\Http\Controllers\DashboardController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\DashboardController::class, 'contact'])->name('contact');




//end
