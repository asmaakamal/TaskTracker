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
    return view('home');
});
Route::group(['middleware'=>'auth'], function(){
	
	Route::get('/show',"TaskController@getTask");

	Route::get('/new',"TaskController@add_Task");

	Route::post('/addtask', "TaskController@addnewTask");

	Route::get('/delete/{id}', 'TaskController@delete_Task');

	Route::get('/edit/{id}', 'TaskController@edit_Task');

	Route::post('/update', 'TaskController@update_Task');
});

Auth::routes();
Route::get('/home', 'AuthController@index');


