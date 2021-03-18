<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|https://stackoverflow.com/questions/65197085/laravel-mix-with-bootstrap-4
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('tasks', ControllerTask::class);
Route::get('/home', 'HomeController@index')->name('home');
