<?php

use App\Http\Controllers\CameraController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CustomerPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ShopController;
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
Route::get('list-image', [CameraController::class, 'listImage'])->name('list-image');
Route::get('list-image-user', [CameraController::class, 'listImageUser']);

// API Claim
Route::prefix('claim')->group(function () {
    Route::get('list-year', [ClaimController::class, 'listYear']);
    Route::get('list-brand', [ClaimController::class, 'listCarBrandByYear']);
    Route::get('list-type', [ClaimController::class, 'listCarTypeByCarBrand']);
    Route::get('list-seri', [ClaimController::class, 'listCarSeriByCarType']);
    Route::get('list-plate', [ClaimController::class, 'listPlate']);
    Route::get('price-car', [ClaimController::class, 'getPriceCar']);
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

Route::get('customer', [CustomerPageController::class, 'index'])->name('landing-page');
Route::get('dashboard', [CustomerPageController::class, 'dashboard'])->name('dashboard-customer');
Route::get('perusahaan', [CustomerPageController::class, 'company'])->name('company');
Route::get('komisaris-direksi', [CustomerPageController::class, 'commissionerDirector'])->name('commissionerDirector');
Route::get('tenaga-ahli', [CustomerPageController::class, 'expert'])->name('expert');
Route::get('mitra', [CustomerPageController::class, 'partner'])->name('partner');
Route::get('claim', [CustomerPageController::class, 'claim'])->name('claim');
Route::get('support', [CustomerPageController::class, 'support'])->name('support');
Route::get('list-image-customer', [CameraController::class, 'listImageCustomer']);

Route::get('user', [UserController::class, 'show']);

Route::prefix('shop')->group(function () {
    Route::get('', [CustomerPageController::class, 'shop'])->name('shop');
    Route::get('product', [CustomerPageController::class, 'shopProduct'])->name('shopProduct');
    Route::get('detail/{id}', [CustomerPageController::class, 'shopDetail'])->name('shopDetail');
    Route::get('feature', [CustomerPageController::class, 'shopFeature'])->name('shopFeature');
    Route::get('personal-data', [CustomerPageController::class, 'shopPersonalData'])->name('shopPersonalData');
    Route::get('car-data', [CustomerPageController::class, 'shopCarData']);
    Route::get('checkout', [CustomerPageController::class, 'shopCheckout']);
    
    Route::post('request-car', [ShopController::class, 'requestCar']);
    Route::post('search-product', [ShopController::class, 'searchProduct']);
    Route::post('set-product-id', [ShopController::class, 'setProductId']);
    Route::post('step2', [ShopController::class, 'step2']);
    Route::post('risk-expansion', [ShopController::class, 'riskExpansion']);
    Route::post('step3', [ShopController::class, 'step3'])->name('shopStep3');
    Route::post('step4', [ShopController::class, 'step4'])->name('shopStep4');
    Route::get('forget-cookie', [ShopController::class, 'forgetCookie'])->name('forgetCookie');
});

Route::prefix('collection')->group(function () {
    Route::get('', [CollectionController::class, 'index'])->name('collection');
    Route::post('upload-image-dashboard', [CollectionController::class, 'uploadImageDashboard'])->name('collection-upload-image-dashboard');
    Route::post('upload-image', [CollectionController::class, 'uploadImage'])->name('collection-upload-image');
    Route::get('image', [CollectionController::class, 'image'])->name('collection-image');
    Route::post('description', [CollectionController::class, 'storeDescription'])->name('collection-store-description');
});
