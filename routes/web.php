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

Route::get('/', function () {
    return view('layouts.primary', ['page' => 'pages.about']);
})->name('site.main.about');

Route::get('/portfolio', function () {
    return view('layouts.primary', ['page' => 'pages.portfolio']);
})->name('site.main.portfolio');

Route::get('/articles', function () {
    return view('layouts.primary', ['page' => 'pages.articles']);
})->name('site.main.articles');

