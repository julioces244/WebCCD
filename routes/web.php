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

//Rutas página CCD (solo vistas)

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

      //Servicios CCD
      Route::get('/servicios/competitividad_desarrollo', function () {
          return view('servicio_competitividad');
      });

      Route::get('/servicios/gestion_politica', function () {
          return view('servicio_gestion');
      });

      Route::get('/servicios/estudios_economicos', function () {
          return view('servicio_estudios');
      });

      Route::get('/servicios/inversion', function () {
          return view('servicio_inversiones');
      });

      Route::get('/servicios/legal', function () {
          return view('servicio_legal');
      });

      Route::get('/servicios/tech', function () {
          return view('servicio_tech');
      });


Route::get('/experiencia', function () {
          return view('experiencia');
});

Route::get('/miespacio', function () {
          return view('login');
});

Route::get('/contacto', function () {
          return view('contacto');
});



Route::post('/intranet', 'Auth\LoginController@authenticate')->name('intranet');

Route::get('/intranet', 'DocumentController@showYears');
Route::get('/intranet/{name}', 'DocumentController@showProjects');
Route::get('/intranet/{name}/{abb_project}', 'DocumentController@showTypeDocuments');
Route::get('/intranet/{name}/{abb_project}/{nametype}', 'DocumentController@showDocuments');
