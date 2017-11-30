<?php
Route::get('/', 'AdminController@index')->name('admin.index');
Route::get('/post/create', 'ArticlesAdminController@postCreate')->name('admin.createPost');
Route::get('/post/edit', 'ArticlesAdminController@postEdit')->name('admin.editPost');
Route::get('/post/edit/{id}', 'ArticlesAdminController@postEditById')->name('admin.getPostById');
Route::post('/post/create', 'ArticlesAdminController@postCreateSend');
Route::post('/post/edit/{id}', 'ArticlesAdminController@postEditSend');