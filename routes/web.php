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

Route::get('/home/{any?}', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->where('any', '.*');

Route::get('/admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('aAdmin_login');


Route::post('public/save_contractor', [App\Http\Controllers\StakeholderController::class, 'saveContractor'])->name('save_contractor');
Route::post('public/save_seller', [App\Http\Controllers\StakeholderController::class, 'saveSeller'])->name('save_seller');
Route::post('public/save_buyer', [App\Http\Controllers\StakeholderController::class, 'saveBuyer'])->name('save_buyer');


Route::get('public/contractors-list', [App\Http\Controllers\StakeholderController::class, 'getContractorList'])->name('contractors_list');
Route::get('public/sellers-list', [App\Http\Controllers\StakeholderController::class, 'getSellersList'])->name('sellers_list');
Route::get('public/buyers-list', [App\Http\Controllers\StakeholderController::class, 'getBuyerList'])->name('buyers_list');
