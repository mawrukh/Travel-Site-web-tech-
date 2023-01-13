<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
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
Route::get('/home', function () {
    return view('index');
});
Route::get('/contact', function(){
    return view('contactUs');
});
Route::get('/request', function(){
    return view('request');
});
Route::get('/blogs', function(){
    return view('blogs');
});
Route::get('/booking', [BookingController::class, 'index']);

Route::get('/continents','App\Http\Contollers\ContinentController@index');

Route::get('/show', [UserController::class,'index']);

Route::get('/ajax-call', [UserController::class,'ajaxCall']);