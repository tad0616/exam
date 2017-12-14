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

Route::get('/', 'ExamController@index')->name('index');

Auth::routes();

Route::get('/home', 'ExamController@index')->name('home.index');

Route::get('/exam', 'ExamController@index')->name('exam.index');
Route::get('/exam/create', 'ExamController@create')->name('exam.create');
Route::post('/exam', 'ExamController@store')->name('exam.store');
