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

Route::get('laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('clever_page.index');
});

Route::get('about', function () {
    return view('homepage.index');
});

Route::get('courses', function () {
    return view('clever_page.courses');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('signin', function () {
    return view('auth.signin');
});


Route::get('Cprogramming', function () {
    return view('Csidebar.index');
});

Route::get('Cprogramming1', function () {
    return view('Csidebar.index1');
});

Route::get('Cprogramming2', function () {
    return view('Csidebar.index2');
});

Route::get('Cprogramming3', function () {
    return view('Csidebar.index3');
});

Route::get('/instructors', function () {
    return view('clever_page.instructors');
});

Route::get('/blog', function () {
    return view('clever_page.blog');
});

Route::get('/blog-details', function () {
    return view('clever_page.blog-details');
});

Route::get('/regular-page', function () {
    return view('clever_page.regular-page');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();