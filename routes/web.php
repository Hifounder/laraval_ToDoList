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


Route::get('/', 'PagesController@home');

/*
  GET    // /projects         (index)
  GET    // /projects/create
  POST   // /projects         (store)
  GET    // /projects/1
  GET    // /projects/1/edit
  PATCH  // /projects/1       (update)
  DELETE // /projects/1       (destroy)

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::patch('/projects/{project}/edit', 'ProjectsController@update');
Route::delete('/projects/{project}/edit', 'ProjectsController@destroy');
*/


Route::resource('projects', 'ProjectsController');
