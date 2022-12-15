<?php

use App\Http\Controllers\CameraController;
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

Route::get('camera', [CameraController::class, 'index']);

// Route::post('camera', [CameraController::class, 'index']);
// Route::get('show-camera', [CameraController::class, 'index']);

// Route::get('/show-camera', function () {
//     return view('camera');
// });

Route::post('save-image', [CameraController::class, 'store']);

Route::get('testing', function () {
    return view('welcome-testing');
});

Route::get('camera-testing', [CameraController::class, 'indexTesting']);