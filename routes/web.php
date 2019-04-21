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
Route::get('/category/{cat}', 'HomeController@category');
Route::get('/category/{cat}/{parent}', 'HomeController@showArticleInCategory');
Route::get('/beat/{cat}', 'HomeController@beat');
Route::get('tag/{tag}', 'HomeController@tag');
Route::get('/post/{cat}/{slug}','HomeController@viewAricle');
Route::post('/comment', 'HomeController@addComment');
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