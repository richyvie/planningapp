<?php

use Illuminate\Http\Request;
use App\Activity;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/******************************** 
* Activity routes
*********************************/

Route::get('activities', 'ActivityController@index');
Route::get('activities/{id}', 'ActivityController@show');
Route::post('activities', 'ActivityController@store');
Route::put('activities/{id}', 'ActivityController@update');
Route::delete('activities/{id}', 'ActivityController@delete');

/******************************** 
* Client routes
*********************************/

Route::get('clients', 'ClientController@index');
Route::get('clients/{client}', 'ClientController@show');
Route::post('clients', 'ClientController@store');
Route::put('clients/{id}', 'ClientController@update');
Route::delete('clients/{id}', 'ClientController@delete');

/******************************** 
* Collaborator routes
*********************************/

Route::get('collaborators', 'ClientController@index');
Route::get('collaborators/{id}', 'ClientController@show');
Route::post('collaborators', 'ClientController@store');
Route::put('collaborators/{id}', 'ClientController@update');
Route::delete('collaborators/{id}', 'ClientController@delete');

/******************************** 
* JobRole routes
*********************************/

Route::get('jobroles', 'JobroleController@index');
Route::get('jobroles/{id}', 'JobroleController@show');
Route::post('jobroles', 'JobroleController@store');
Route::put('jobroles/{id}', 'JobroleController@update');
Route::delete('jobroles/{id}', 'JobroleController@delete');

/******************************** 
* Planning routes
*********************************/

Route::get('planning', 'PlanningController@index');
Route::get('planning/{id}', 'PlanningController@show');
Route::post('planning', 'PlanningController@store');
Route::put('planning/{id}', 'PlanningController@update');
Route::delete('planning/{id}', 'PlanningController@delete');

/******************************** 
* Project routes
*********************************/

Route::get('projects', 'ProjectController@index');
Route::get('projects/{id}', 'ProjectController@show');
Route::post('projects', 'ProjectController@store');
Route::put('projects/{id}', 'ProjectController@update');
Route::delete('projects/{id}', 'ProjectController@delete');