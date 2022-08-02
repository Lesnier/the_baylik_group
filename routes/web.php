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


Route::post('public/save_contractor', [App\Http\Controllers\StakeholderController::class, 'saveContractor'])->name('save_contractor');
Route::post('public/save_seller', [App\Http\Controllers\StakeholderController::class, 'saveSeller'])->name('save_seller');
Route::post('public/save_buyer', [App\Http\Controllers\StakeholderController::class, 'saveBuyer'])->name('save_buyer');
