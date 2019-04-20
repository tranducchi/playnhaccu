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
Route::get('/', 'front_end\ArticleController@index');
Route::get('/chuyen-muc/{cat}', 'HomeController@category');
Route::get('tag/{tag}', 'HomeController@tag');
Route::get('/detail-post', function(){
    return view('front-end.detail-post');
});
Route::get('/list/list-article', function(){
    return view('front-end.list-article');
});
// Dashboard Admin
Route::prefix('/admin')->group(function(){
    Route::get('/', 'HomeController@dashboard');
    Route::resource('/category', 'admin\CategoryController');
    Route::resource('/article', 'admin\ArticleController');
    Route::resource('/tag', 'admin\TagController');
    Route::resource('/comment', 'admin\CommentController')->only([
        'index'
    ]);
    Route::resource('/user', 'admin\UserController');
});
Route::post('/admin/article/search','admin\ArticleController@search');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');