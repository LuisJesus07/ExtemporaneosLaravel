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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index');
Route::get('/create_solicitud/{subject_id}', 'UserController@create_solicitud');

Route::group(['middleware' => ['role:Administrador']], function () {
    
	//rutas modulo propiedades
	Route::get('/menu_admin', 'AdminController@index');

	//filtrado
	Route::get('/solicitudes/carrera/{degree}','AdminController@solicitudes_by_carrera');
	Route::get('/solicitudes/plan/{study_plan}','AdminController@solicitudes_by_plan');
	Route::get('/solicitudes/materia/{subject}','AdminController@solicitudes_by_materia');

});
