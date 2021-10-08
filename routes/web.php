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

Route::get('/', function(){
    return view('welcome');
});

// login 
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//dashboard
Route::get('/dashboard', function(){
    return view('welcome');
});

// student
Route::get('/student/new', 'StudentController@admission');
Route::get('/student/list', 'StudentController@list');

// settings
Route::get('settings/profile', 'SettingsController@profile');
Route::get('settings/manage-user', 'SettingsController@userManage');
Route::get('settings/defaults', 'SettingsController@defaults');