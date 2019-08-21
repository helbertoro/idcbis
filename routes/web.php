<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('transparencia', 'MenuController@transparencia')->name('transparencia');
Route::get('transparencia/mecanismos_de_contacto', 'MenuController@mecanismosContacto')->name('mecanismosContacto');
Route::get('transparencia/informacion_de_interes', 'MenuController@informacionInteres')->name('informacionInteres');
Route::get('transparencia/estructura_organica', 'MenuController@estructuraOrganica')->name('estructuraOrganica');
Route::get('transparencia/normatividad', 'MenuController@normatividad')->name('normatividad');
Route::get('transparencia/presupuesto', 'MenuController@presupuesto')->name('presupuesto');
Route::get('transparencia/planeacion', 'MenuController@planeacion')->name('planeacion');
Route::get('transparencia/control', 'MenuController@control')->name('control');
Route::get('transparencia/contratacion', 'MenuController@contratacion')->name('contratacion');
Route::get('transparencia/tramites_y_servicios', 'MenuController@tramitesServicios')->name('tramitesServicios');
Route::get('transparencia/instrumentos_de_gestion', 'MenuController@instrumentosGestion')->name('instrumentosGestion');
Route::get('transparencia/transparencia_pasiva', 'MenuController@transparenciaPasiva')->name('transparenciaPasiva');
