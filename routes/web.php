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



Route::namespace('Front')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/category/{slug}', 'CategoryController@index')->name('category');
    Route::get('/', 'ProductController@index')->name('product');
});


