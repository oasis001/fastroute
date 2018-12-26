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

// Route::get('post','PostController@index')->name('post');

Route::resource('/post', 'PostController')->name('index','show');


Route::get('/signup','LoginController@signup')->name('signup');

Route::get('/login','LoginController@index')->name('login');

Route::get('/','WebpageController@index')->name('main');

Route::get('/about','WebpageController@about')->name('about');

Route::get('/home','WebpageController@home')->name('home');

Route::get('/service','WebpageController@service')->name('service');

Route::get('/contact','WebpageController@contact')->name('contact');


// Route::get('/', function () {
//     return view('welcome');
// });
