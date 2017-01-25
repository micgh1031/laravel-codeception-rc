<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('developers', 'DeveloperController@index');
Route::get('developers/create', 'DeveloperController@create');
Route::post('developers/create', 'DeveloperController@store');

Route::get('projects', 'ProjectController@index');
Route::get('projects/create', 'ProjectController@create');
Route::post('projects/create', 'ProjectController@store');

Route::get('admin', 'AdminController@index');
Route::get('admin/projects', 'AdminController@index');
Route::get('admin/projects/{id}', 'AdminController@approve');
Route::get('admin/developers', 'AdminController@showDevelopers');
Route::get('admin/developers/{id}', 'AdminController@devapprove');

Route::get('about', function(){
   return view('about');
});
