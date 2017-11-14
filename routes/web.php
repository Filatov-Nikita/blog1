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
    return view('layouts.index');
})->name('site.main.index');

Route::get('/about', function () {
    return view('layouts.primary', ['page' => 'pages.about']);
})->name('site.main.about');


Route::group(['prefix' => '/articles'], function() {
    Route::get('/', function () {
    return view('layouts.primary', ['page' => 'pages.articles']);
})->name('site.main.articles');

Route::get('/orm', 'ArticlesController@orm')
        ->name('site.main.articlesOrm');
});


 Route::group(['prefix' => '/portfolio'], function() {
     Route::get('/', 'ProjectsController@portfolio')
        ->name('site.main.portfolio');
     
     Route::get('/{id}', 'ProjectsController@project')
        ->name('site.main.articlesProject');
 });