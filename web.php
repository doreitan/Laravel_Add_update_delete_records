<?php

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

Route::get('/', "controller1@index");
Route::get('/index', "controller1@index");
Route::get('/about', "controller1@about");
Route::get('/services', "controller1@services");
Route::get('/contact', "controller1@contact");
Route::resource("posts", "controller2");
   