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

// BRANDS
Route::get('/brands', 'BrandController@index') 
-> name('brand-index');

Route::get('/brand/{id}', 'BrandController@show') 
-> name('brand-show');

// SEATS
Route::get('/seats', 'SeatController@index') 
-> name('seats-index');

Route::get('/seat/{id}', 'SeatController@show') 
-> name('seat-show');