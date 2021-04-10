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

Route::get('/', function () {
    return view('welcome');
});

Route::get('getOne','practice\UserController@OneToOne');
Route::get('belongsTo','practice\UserController@belonsto');
Route::get('getMany','practice\UserController@OneMany');
Route::get('OneManyReverse','practice\UserController@OneManyReverse');
Route::get('ManyToMany','practice\UserController@ManyToMany');
Route::get('ManyToReverse','practice\UserController@ManyToReverse');
Route::get('HasOneThrough','practice\UserController@HasOneThrough');


//Name space 
Route::namespace('practice')->group(function () {
    Route::get('student_data','StudentController@index');
});
