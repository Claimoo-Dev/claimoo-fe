<?php

use App\Http\Controllers\CameraController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
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

Route::get('camera', [CameraController::class, 'index'])->name('camera');
Route::post('save-image', [CameraController::class, 'store']);
Route::get('sign-in', [UserController::class, 'signInForm'])->name('sign-in-form');
Route::post('sign-in', [UserController::class, 'signIn'])->name('sign-in');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('sign-out', [UserController::class, 'signOut']);
Route::get('feedback', [FeedbackController::class, 'index']);
Route::post('feedback', [FeedbackController::class, 'create']);
Route::get('verify', [UserController::class, 'verifiedEmail']);
Route::post('forgot-password', [UserController::class, 'sendLinkForgotPassword'])->name('sendLinkForgotPassword');
Route::get('reset-password', [UserController::class, 'requestResetPassword'])->name('resetPassword');
Route::post('reset-password', [UserController::class, 'resetPassword'])->name('postResetPassword');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

Route::get('/customer', function () {
    return view('customer.index');
})->name('dashboard-customer');

Route::get('/dashboard', function () {
    return view('customer.dashboard');
});