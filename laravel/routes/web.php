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




/** Project Routs */
Route::resource('projects', 'ProjectsController');

Route::post('projects/{project}/tasks/', 'ProjectTasksController@store');

Route::post('completed-task/{task}', 'CompletedTasksController@store');
Route::delete('completed-task/{task}', 'CompletedTasksController@destroy');


/** */
Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
