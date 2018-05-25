<?php
use Illuminate\Http\Request;
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


Route::group(['prefix' => '/articles'], function () {
    Route::get('/', 'ArticlesController@listPost')
        ->name('site.main.articles');
    Route::get('/{id}', 'ArticlesController@getPostById')
        ->name('site.main.articlesById');
    Route::get('/orm', 'ArticlesController@orm')
        ->name('site.main.articlesOrm');
});


Route::group(['prefix' => '/portfolio'], function () {
    Route::get('/', 'ProjectsController@portfolio')
        ->name('site.main.portfolio');

    Route::get('/{id}', 'ProjectsController@project')
        ->name('site.main.articlesProject');
});

Route::get('/feedback', 'PageController@feedback')->name('site.main.feedback');
Route::get('/supportme', 'PageController@supportme')->name('site.main.supportme');
Route::get('/upload', 'TestController@testGet');
Route::post('/upload', 'TestController@testPost');
Route::get('/mail', 'TestController@mail');
Route::get('/confirmed/{hash}', 'LoginController@confirmed_user')->name('confirmed');
Route::get('/search', 'PageController@search');

// Route::get('/vue', function () {
//     return view('pages.test');
// });
// Route::post('/testupload', function (Request $request) {
//     $files = $request->pics;
//     foreach ($files as $file) {
//         $file->store('ava');
//     }
//     return response(['status' => 'success'], 200);
// });