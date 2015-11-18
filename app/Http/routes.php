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
//rutas ejemplo
Route::get('ejemplo', function () {
    return view('ini.sub-ejemplo');
});
Route::get('ejemplo2', function () {
    return view('canvas');
});
//rutas
Route::get('/',[
    'uses' => 'Admin@index',
    'as'   => 'index'
]);

//rutas de subsistemas
Route::get('subsistema-uno',[
    'uses' => 'Admin@subuno',
    'as'   => 's-uno'
]);
Route::get('subsistema-dos',[
    'uses' => 'Admin@subdos',
    'as'   => 's-dos'
]);
Route::get('subsistema-tres',[
    'uses' => 'Admin@subtres',
    'as'   => 's-tres'
]);
//rutas del subsistema UNO
Route::get('sub-sub-sistema-uno-uno',[
    'uses' => 'Admin@ssunouno',
    'as'   => 'ss-uno-uno'
]);
Route::get('sub-sub-sistema-uno-dos',[
    'uses' => 'Admin@ssunodos',
    'as'   => 'ss-uno-dos'
]);
Route::get('sub-sub-sistema-uno-tres',[
    'uses' => 'Admin@ssunotres',
    'as'   => 'ss-uno-tres'
]);
Route::get('sub-sub-sistema-uno-cuatro',[
    'uses' => 'Admin@ssunocuatro',
    'as'   => 'ss-uno-cuatro'
]);
Route::get('sub-sub-sistema-uno-cinco',[
    'uses' => 'Admin@ssunocinco',
    'as'   => 'ss-uno-cinco'
]);
Route::get('sub-sub-sistema-uno-seis',[
    'uses' => 'Admin@ssunoseis',
    'as'   => 'ss-uno-seis'
]);
//rutas del subsistema DOS
Route::get('sub-sub-sistema-dos-uno',[
    'uses' => 'Admin@ssdosuno',
    'as'   => 'ss-dos-uno'
]);
Route::get('sub-sub-sistema-dos-dos',[
    'uses' => 'Admin@ssdosdos',
    'as'   => 'ss-dos-dos'
]);
Route::get('sub-sub-sistema-dos-tres',[
    'uses' => 'Admin@ssdostres',
    'as'   => 'ss-dos-tres'
]);
Route::get('sub-sub-sistema-dos-cuatro',[
    'uses' => 'Admin@ssdoscuatro',
    'as'   => 'ss-dos-cuatro'
]);
//rutas del subsistema TRES
Route::get('sub-subsistema-tres-uno',[
    'uses' => 'Admin@sstresuno',
    'as'   => 'ss-tres-uno'
]);
Route::get('sub-subsistema-tres-dos',[
    'uses' => 'Admin@sstresdos',
    'as'   => 'ss-tres-dos'
]);
Route::get('sub-subsistema-tres-tres',[
    'uses' => 'Admin@sstrestres',
    'as'   => 'ss-tres-tres'
]);
//GEOPORTAl
Route::get('geoportal',[
    'uses' => 'Admin@geo',
    'as'   => 'geo-p'
]);





/////////////////////////////RUTAS PLANIFICACION///////////////////////

Route::get('planificacion',[
	'uses'=>'PlanificacionController@ver',
	'as'=>'planificacion'
	]);


Route::get('/envplanificacion','PlanificacionController@altadatosjsonget');
Route::post('/envplanificacion','PlanificacionController@altadatosjsonpost');

Route::get('/planificacionlista','PlanificacionController@reporte');


Route::get('planificacionlista',[
    'uses'=>'PlanificacionController@reporte',
    'as'=>'proyectos'
    ]);




//reporte plnificacion





//////////////////////////RUTAS PLANTACION///////////////////////////////////


//Route::get('/registro_plantacion/{idProyecto}','AdicionPlantacionController@ver')->where('idProyecto', '[0-9]+');
Route::post('/registro_plantacion/procesar','AdicionPlantacionController@procesar'); 

Route::get('/registro_plantacion/provincias','AdicionPlantacionController@getProvincias'); 
Route::get('/registro_plantacion/municipios','AdicionPlantacionController@getMunicipios'); 
Route::get('/registro_plantacion/comunidades','AdicionPlantacionController@getComunidades'); 
Route::get('/pruebas','AdicionPlantacionController@pruebas'); 





Route::get('registro_plantacion/{idProyecto}',[
    'uses'=>'AdicionPlantacionController@ver',
    'as'=>'registro_plantacion'
    ]);


/////////////////////////////rutas post plantacion///////////////////////
Route::resource('/monitoreo','MonitoreoController');
Route::get('/ppm','MonitoreoController@ppm');
Route::get('/ajaxmonitoreo','MonitoreoController@verajax');

/////////////////////////////////////////////////////////////////////////







//////////////////////////////////AJAX JSON//////////////////////////////////
Route::get('/ajaxjson', 'jsonController@ver');
Route::get('/ajaxjson', 'jsonController@verajax');


////////////////////////////////////////////////////////////////////////////
