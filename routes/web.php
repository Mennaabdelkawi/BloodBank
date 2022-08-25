<?php

use App\Http\Controllers\BloodGroupController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MsgController;
use App\Http\Controllers\OrderController;
use Facade\FlareClient\View;
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

Route::get('/','App\Http\controllers\CityController@index')->name('/');
Route::get('home',function(){return redirect('/'.'#headerID');})->name('home');
Route::get('about',function(){return redirect('/'.'#aboutID');})->name('about');
Route::get('search',function(){return redirect('/'.'#searchID');})->name('search');
Route::get('contact',function(){return redirect('/'.'#contactID');})->name('contact');
Route::get('purchase',function() { return view('purchase');});
Route::get('cart',function() { return view('cart');});
Route::get('msg',function() { return view('msg');});
Route::post('/',[HospitalController::class,'search'])->name('search.route');

Route::resource('blood_groups', BloodGroupController::class);
Route::resource('orders', OrderController::class);
Route::resource('msg', MsgController::class);
