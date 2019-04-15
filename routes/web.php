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

Route::get('/single-course', 'MainController@single_course')->middleware('auth');

Route::get('register', function () {
    return view('auth.register');
});

Route::get('signin', function () {
    return view('auth.signin');
});

Route::get('/development', function () {
    return view('browse_courses.development');
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

//Java starts
Route::get('/javaprogramming1', 'MainController@main_java');
Route::get('/java1', 'MainController@java1');

Route::get('/java2', 'MainController@java2');
Route::get('/java3', 'MainController@java3');
Route::get('/java4', 'MainController@java4');
Route::get('/java5', 'MainController@java5');

Route::get('/java6', function () {
    return view('javasidebar.java6');
});
Route::get('/java7', function () {
    return view('javasidebar.java7');
});

Route::get('/java8', function () {
    return view('javasidebar.java8');
});

Route::get('/java9', function () {
    return view('javasidebar.java9');
});

Route::get('/java10', function () {
    return view('javasidebar.java10');
});

//Java Ends
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


Route::get('/courses-category', 'MainController@courses_category');

Route::get('/design', function () {
    return view('browse_courses.design');
});

Route::get('/it_software', function () {
    return view('browse_courses.it_Software');
});

Route::get('/Programming-Language', function () {
    return view('browse_courses.programming_language');
});

//Route::get('/index', 'After_loginController@index_login')->middleware('auth');

Auth::routes();
//Route::get('/index', 'After_loginController@index_login')->name('index-login');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//courses starts

