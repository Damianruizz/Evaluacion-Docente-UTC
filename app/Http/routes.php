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

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logOut'); 

Route::get('homeadmin', 'Auth\AuthController@home');
Route::get('homealumn/{alumno}', 'AlumnoController@home');

Route::get('evaluation/{profesor}/{carrera}', ['uses' => 'AlumnoController@survey', 'as' => 'evaluation']);
Route::get('results/{profesor}', ['uses' => 'ProfesorController@results', 'as' => 'results']);
Route::get('carrera_prof/{carrera}', ['uses' => 'ProfesorController@carrera_prof', 'as' => 'carrera_prof']);
Route::post('boolean', ['uses' => 'ProfesorController@boolean', 'as' => 'boolean']);

Route::post('survey', 'AlumnoController@surveyresponse');
Route::post('comment', 'AlumnoController@insert_comment');

//Promedio por carreras
Route::get('carrera/{carrera}', ['uses' => 'CarreraController@results', 'as' => 'carrera']);
Route::get('conscom/{profesor}', ['uses' => 'ProfesorController@getcomment', 'as' => 'conscom']);