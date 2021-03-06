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
Route::get('/dashboard/login',[App\Http\Controllers\DashboardController::class, 'login'])->name('user_login');
Route::get('/dashboard/register',[App\Http\Controllers\DashboardController::class, 'register'])->name('user_register');
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
Route::get('/indexv2', [App\Http\Controllers\DashboardController::class, 'indexv2'])->name('indexv2');
Route::get('/aboutus', [App\Http\Controllers\DashboardController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\DashboardController::class, 'service'])->name('service');
Route::get('/gallery', [App\Http\Controllers\DashboardController::class, 'gallery'])->name('gallery');
Route::get('/blog', [App\Http\Controllers\DashboardController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\DashboardController::class, 'contact'])->name('contact');
Route::get('/donate', [App\Http\Controllers\DashboardController::class, 'donate'])->name('donate');
Route::get('/view/request/donate', [App\Http\Controllers\DashboardController::class, 'request_donate'])->name('request_donate');
Route::post('/post/request/donate', [App\Http\Controllers\DashboardController::class, 'post_request_donate'])->name('post_request_donate');
Route::get('/list/request/donate', [App\Http\Controllers\DashboardController::class, 'list_request_donate'])->name('list_request_donate');

Route::post('/post/donate', [App\Http\Controllers\DashboardController::class, 'post_donate'])->name('post_donate');
Route::get('/view/donate', [App\Http\Controllers\DashboardController::class, 'view_donate'])->name('view_donate');
Route::post('/post/information', [App\Http\Controllers\DashboardController::class, 'post_information'])->name('post_information');
Route::get('/view/information', [App\Http\Controllers\DashboardController::class, 'view_information'])->name('view_information');






//end


//stripe

Route::get('/stripe-payment/{id}/{slug}', [App\Http\Controllers\DashboardController::class, 'stripe'])->name('stripe');
Route::post('/stripe-payment', [App\Http\Controllers\StripeController::class, 'stripePost'])->name('stripe.post');
//end stripe

//PayPal
Route::get('handle-payment', [App\Http\Controllers\PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [App\Http\Controllers\PayPalPaymentController::class,'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [App\Http\Controllers\PayPalPaymentController::class,'paymentSuccess'])->name('success.payment');
//end
