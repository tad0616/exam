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
Route::pattern('id', '[0-9]+');

Route::get('/', 'ExamController@index')->name('index');

Auth::routes();

Route::get('/home', 'ExamController@index')->name('home.index');

Route::get('/exam', 'ExamController@index')->name('exam.index');
Route::get('/exam/create', 'ExamController@create')->name('exam.create');
Route::post('/exam', 'ExamController@store')->name('exam.store');
Route::get('/exam/{id}', 'ExamController@show')->name('exam.show');
Route::get('/exam/{id}/edit', 'ExamController@edit')->name('exam.edit');
Route::patch('/exam/{id}', 'ExamController@update')->name('exam.update');


Route::post('/topic', 'TopicController@store')->name('topic.store');
Route::get('/topic/{id}/edit', 'TopicController@edit')->name('topic.edit');
