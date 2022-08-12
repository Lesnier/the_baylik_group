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


Route::post('/public/save_contractor', [App\Http\Controllers\StakeholderController::class, 'saveContractor'])->name('save_contractor');
Route::post('/save_seller', [App\Http\Controllers\StakeholderController::class, 'saveSeller'])->name('save_seller');
Route::post('/save_buyer', [App\Http\Controllers\StakeholderController::class, 'saveBuyer'])->name('save_buyer');


Route::get('/contractors-list', [App\Http\Controllers\StakeholderController::class, 'getContractorList'])->name('contractors_list');
Route::get('/sellers-list', [App\Http\Controllers\StakeholderController::class, 'getSellersList'])->name('sellers_list');
Route::get('/buyers-list', [App\Http\Controllers\StakeholderController::class, 'getBuyerList'])->name('buyers_list');


//----------------
Route::get('/my-email',function(){
  return view('email.welcome_mail');
});
