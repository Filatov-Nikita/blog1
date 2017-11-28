<?php
Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::get('/admin/post', 'AdminController@postMenu')->name('site.admin.postMenu');
Route::get('/admin/post/create', 'AdminController@postCreate')->name('site.admin.createPost');
Route::get('/admin/post/edit', 'AdminController@postEdit')->name('site.admin.editPost');
Route::get('/admin/post/edit/{id}', 'AdminController@postEditById')->name('site.admin.getPostById');
Route::post('/admin/post/create', 'AdminController@postCreateSend');
Route::post('/admin/post/edit/{id}', 'AdminController@postEditSend');