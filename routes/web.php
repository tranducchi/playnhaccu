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


Route::get('/', function(){
    return view('layouts.home');
});
Route::get('/categories', function(){
    return view('layouts.categories');
});
Route::get('/detail-post', function(){
    return view('layouts.detail-post');
});