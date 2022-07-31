<?php

use App\Http\Controllers\Customer\SalesProcess\AddressController;
use App\Http\Controllers\Customer\SalesProcess\ProfileCompletionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Assemble\SmartAssembleController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\SalesProcess\CartController;
use App\Http\Controllers\Customer\Market\ProductController as MarketProductController;
use App\Http\Controllers\Auth\Customer\LoginRegisterController;


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
require 'admin.php';

Route::namespace('Auth')->group(function () {
    Route::get('login-register', [LoginRegisterController::class, 'loginRegisterForm'])->name('auth.customer.login-register-form');
    Route::middleware('throttle:customer-login-register-limiter')->post('/login-register', [LoginRegisterController::class, 'loginRegister'])->name('auth.customer.login-register');
    Route::get('login-confirm/{token}', [LoginRegisterController::class, 'loginConfirmForm'])->name('auth.customer.login-confirm-form');
    Route::middleware('throttle:customer-login-confirm-limiter')->post('/login-confirm/{token}', [LoginRegisterController::class, 'loginConfirm'])->name('auth.customer.login-confirm');
    Route::middleware('throttle:customer-login-resend-otp-limiter')->get('/login-resend-otp/{token}', [LoginRegisterController::class, 'loginResendOtp'])->name('auth.customer.login-resend-otp');
    Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('auth.customer.logout');
});

Route::get('/', [HomeController::class, 'home'])->name('customer.home');

Route::namespace('SalesProcess')->group(function () {

    //cart
    Route::get('/cart', [CartController::class, 'cart'])->name('customer.sales-process.cart');
    Route::post('/cart', [CartController::class, 'updateCart'])->name('customer.sales-process.update-cart');
    Route::post('/add-to-cart/{product:slug}', [CartController::class, 'addToCart'])->name('customer.sales-process.add-to-cart');
    Route::get('/remove-from-cart/{cartItem}', [CartController::class, 'removeFromCart'])->name('customer.sales-process.remove-from-cart');

    //profile completion
    Route::get('/profile-completion', [ProfileCompletionController::class, 'profileCompletion'])->name('customer.sales-process.profile-completion');
    Route::post('/profile-completion', [ProfileCompletionController::class, 'update'])->name('customer.sales-process.profile-completion-update');

    Route::middleware('profile.completion')->group(function () {
        //address
        Route::get('/address-and-delivery', [AddressController::class, 'addressAndDelivery'])->name('customer.sales-process.address-and-delivery');
        Route::post('/add-address', [AddressController::class, 'addAddress'])->name('customer.sales-process.add-address');
        Route::put('/update-address/{address}', [AddressController::class, 'updateAddress'])->name('customer.sales-process.update-address');
        Route::get('/get-cities/{province}', [AddressController::class, 'getCities'])->name('customer.sales-process.get-cities');
    });
});


Route::namespace('Market')->group(function () {

    Route::get('/product/{product:slug}', [MarketProductController::class, 'product'])->name('customer.market.product');
    Route::post('/add-comment/prodcut/{product:slug}', [MarketProductController::class, 'addComment'])->name('customer.market.add-comment');
    Route::get('/add-to-favorite/prodcut/{product:slug}', [MarketProductController::class, 'addToFavorite'])->name('customer.market.add-to-favorite');

});


Route::prefix('smart-assemble')->namespace('Assemble')->group(function () {
    // assemble by user
    Route::get('/', [SmartAssembleController::class, 'index'])->name('smart.assemble.index');
    // recommended system categories, types, gens and configs
    Route::get('/systems/', [SmartAssembleController::class, 'systemCategories'])->name('smart.assemble.categories');
    Route::get('/systems/{systemCategory:slug}', [SmartAssembleController::class, 'systemTypes'])->name('smart.assemble.types');
    Route::get('/systems/{systemCategory:slug}/{systemType:slug}', [SmartAssembleController::class, 'systemGens'])->name('smart.assemble.gens');
    Route::get('/systems/{systemCategory:slug}/{systemType:slug}/{systemGen:slug}', [SmartAssembleController::class, 'systemConfigs'])->name('smart.assemble.configs');
    // recommended system components according to selected system categories, types, gens and configs
    Route::get('/systems/{systemCategory:slug}/{systemType:slug}/{systemGen:slug}/{systemConfig:slug}/config/{system}', [SmartAssembleController::class, 'offeredSystems'])->name('smart.assemble.offered.systems');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
