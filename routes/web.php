<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\kycController;

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
    return view('home');
});
Route::get('login', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('signup');
});

Route::post('signup',[user_controller::class ,'signup']);
Route::get('kyc', function () {
    return view('kyc');
});
Route::post('kyc',[kycController::class ,'kyc']);

//Route::get('kyc1', function () {
//    return view('kyc1');
//});

