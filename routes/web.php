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
})->name('welcome');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/registro', function(){
	return view('auth.register');
});



Route::post('/registroUsuarios', 'UserController@store')->name('registroUsuarios');


Auth::routes();

//Grupo de rutas protegidas con el rol de ADMIN:
Route::group(['middleware' => ['role:Administrador']], function () {

	//Ruta del menu del admin
	Route::get('/home', 'HomeController@index')->name('home');
	//Ruta del filtrado de busquedas
	Route::get('/filtrado_busqueda', function(){
		return view('admin.filtrado_busqueda');
	});
	//Ruta de aceptar solicitudes pendientes
	Route::get('/aceptar_solicitudes', function(){
		return view('admin.aceptar_solicitudes');
	});
	//Ruta de configuraciones
	Route::get('/configuraciones', function(){
		return view('admin.configuraciones');
	});
	//Ruta de crear nuevo período
	Route::get('/crear_periodo', function(){
		return view('admin.crear_periodo');
	});
	
    
	//rutas modulo propiedades
	Route::get('/menu_admin', 'AdminController@index');

	//filtrado
	Route::get('/solicitudes/carrera/{degree}','AdminController@solicitudes_by_carrera');
	Route::get('/solicitudes/plan/{study_plan}','AdminController@solicitudes_by_plan');
	Route::get('/solicitudes/materia/{subject}','AdminController@solicitudes_by_materia');
	Route::get('/solicitudes/pendientes','AdminController@solicitudes_no_aceptadas');
	Route::get('/solicitudes/aceptar/{id}','AdminController@aceptar_examen');
	Route::get('/materias_plan/{plan_id}','AdminController@get_materias_by_plan');

	//Ruta para Crear un nuevo periodo:
	Route::post('/periodo_create', 'PeriodController@store');

	

});

//Grupo de rutas protegidas con el rol de ALUMNO:
Route::group(['middleware' => ['role:Alumno']], function () {

    Route::get('/menu_alumno', function(){
		return view('alumno.menu_alumno');
	});
	Route::get('/solicitar_examen', function(){
		return view('alumno.solicitar_examen');
	});
	Route::get('/consultar_examen', function(){
		return view('alumno.consultar_examen');
	});

	//Ruta que crea la solicitud del examen:
	Route::get('/create_solicitud/{subject_id}', 'UserController@create_solicitud');
	//Ruta para ver las solicitudes del usuario logueado:
	Route::get('/solicitudes', 'UserController@mis_solicitudes');
	//Ruta para obtener las materias del usuario logueado por semestre:
	Route::get('/get_materias/{semester_id}', 'UserController@get_materias');
	//Ruta para eliminar una solicitud:
	Route::get('/delete_solicitud/{id}', 'UserController@destroy');
});

