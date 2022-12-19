<?php

use App\Http\Controllers\CameraController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('camera', [CameraController::class, 'index'])->name('camera');
Route::post('save-image', [CameraController::class, 'store']);

Route::get('testing', function () {
    return view('welcome-testing');
});
Route::get('camera-testing', [CameraController::class, 'indexTesting']);

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

Route::get('/sign-in', function () {
    return view('auth.sign-in');
});

Route::post('sign-in', [UserController::class, 'signIn'])->name('sign-in');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/feedback', function () {
    return view('feedback');
});