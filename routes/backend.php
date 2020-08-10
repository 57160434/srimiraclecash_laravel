<?php

Route::get('/', 'BackController@index');

Route::post('/login','BackController@login');

Route::get('/home','BackController@home');

Route::post('/checklogin', 'BackController@checklogin');
Route::get('/home', 'BackController@successlogin');
Route::get('/logout', 'BackController@logout');

Route::get('/knowledge/listing','KnowledgeController@listing');
// Route::resource('/knowledge/listing','KnowledgeController');
Route::get('/knowledge/create','KnowledgeController@create');
Route::get('/knowledge/edit','KnowledgeController@edit');