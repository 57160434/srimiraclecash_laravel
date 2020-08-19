<?php

Route::get('/', 'FrontController@index');
// Route::get('/','FrontController@listing');

Route::get('/customer', 'FrontController@customer');
Route::get('/service', 'FrontController@service');
Route::get('/knowledge', 'FrontController@knowledge');
Route::get('/document', 'FrontController@document');

Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@createCustomer');

Route::get('/knowledge','KnowledgeController@listing');
Route::get('/knowledge/{id}', 'KnowledgeController@knowledgeDetail');
// Route::get('knowledge/fetch_data', 'KnowledgeController@fetch_data');