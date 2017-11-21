<?php
Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::get('/admin/post', 'AdminController@postMenu')->name('site.admin.postMenu');
Route::get('/admin/post/create', 'AdminController@postCreate')->name('site.admin.createPost');
Route::post('/admin/post/create', 'AdminController@postCreateSend');