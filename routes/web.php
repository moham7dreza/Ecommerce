<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
require 'admin/admin.php';
require 'admin/panel.php';
require 'admin/dashboard.php';


require 'home/customer.php';
require 'home/it-city.php';
require 'home/digital-world.php';


/***********************************************************************************************************************
 * dashboard
 *
 *  */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/test', function () {
    return view('test');
});
