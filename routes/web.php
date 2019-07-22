<?php



//Route::get('/tasks','TasksController@index');
//Route::get('/tasks/{task}','TasksController@show');

Route::get('/','PostController@index')->name('home');
Route::get('/post/{post}','PostController@show');
Route::get('/posts/create','PostController@create');

Route::get('/post/tags/{tag}', 'TagController@index');

Route::post('/post', 'PostController@store');
Route::post('/post/{post}/comments', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');
