<?php

Auth::routes();

Route::get('/','WelcomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','admin'])->prefix('admin')->group(function() {
	// library
	Route::get('/library', 'LibraryController@index');
	Route::get('/library/create', 'LibraryController@create');
	Route::post('/library', 'LibraryController@store');
	Route::get('/library/{id}/edit', 'LibraryController@edit');
	Route::post('/library/{id}/edit', 'LibraryController@update');
	Route::delete('/library/{id}', 'LibraryController@delete');
	// quoting
	Route::get('/quoting', 'QuotingController@index');
	Route::get('/quoting/create', 'QuotingController@create');
	Route::post('/quoting', 'QuotingController@store');
	Route::get('/quoting/{id}/edit', 'QuotingController@edit');
	Route::post('/quoting/{id}/edit', 'QuotingController@update');
	Route::delete('/quoting/{id}', 'QuotingController@delete');
	// tools
	Route::get('/tools', 'ToolsController@index');
	Route::get('/tools/create', 'ToolsController@create');
	Route::post('/tools', 'ToolsController@store');
	Route::get('/tools/{id}/edit', 'ToolsController@edit');
	Route::post('/tools/{id}/edit', 'ToolsController@update');
	Route::delete('/tools/{id}', 'ToolsController@delete');
	// upload
	Route::get('/upload', 'UploadController@index');
	Route::get('/upload/create', 'UploadController@create');
	Route::post('/upload', 'UploadController@store');
	Route::get('/upload/{id}/edit', 'UploadController@edit');
	Route::post('/upload/{id}/edit', 'UploadController@update');
	Route::delete('/upload/{id}', 'UploadController@delete');
});


