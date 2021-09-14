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
Route::view('/app', 'app');
Route::view('/header', 'header');
Route::view('/body', 'body');
Route::view('/footer', 'footer');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});