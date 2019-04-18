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

// Front-end
Route::get('/', function(){
    return view('front-end.home');
});
Route::get('/categories', function(){
    return view('front-end.categories');
});
Route::get('/detail-post', function(){
    return view('front-end.detail-post');
});
Route::get('/list-article', function(){
    return view('front-end.list-article');
});
// Dashboard Admin
Route::prefix('/admin')->group(function(){
    Route::get('/', function(){
        return view('admin.layouts.index');
    });
    Route::resource('/category', 'admin\CategoryController');
    Route::resource('/article', 'admin\ArticleController');
    Route::resource('/comment', 'admin\CommentController');
    Route::resource('/user', 'admin\UserController');
    
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');