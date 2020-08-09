<?php

Route::get('/', 'BackController@index');

Route::post('/login','BackController@login');

Route::get('/home','BackController@home');

Route::post('/checklogin', 'BackController@checklogin');
Route::get('/home', 'BackController@successlogin');
Route::get('/logout', 'BackController@logout');

Route::get('/knowleadge/listing','KnowleadgeController@listing');
Route::get('/knowleadge/create','KnowleadgeController@create');
Route::get('/knowleadge/edit','KnowleadgeController@edit');