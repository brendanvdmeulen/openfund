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

Route::group(['middleware' => ['web']], function () {

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    // Facebook authentication routes...
    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

    // Project routes...
    Route::get('projects, ProjectController@index');
    Route::get('create', 'ProjectController@create');
    Route::post('create', 'ProjectController@create');
    Route::get('edit', 'ProjectController@edit');
    Route::get('edit-project', 'ProjectController@editProject');
    Route::get('delete-project', 'ProjectController@deleteProject');

    Route::get('/', function () {
        return view('welcome');
    });
});