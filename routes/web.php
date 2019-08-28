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
Route::get('/edad/{anyo}/', function ($anyo){
    $fecha = getdate();
    $anyoactual=$fecha["year"];
    $edad=$anyoactual - $anyo;
    return " edad{$edad}"
    ;
});
Route::get('/edad/{anyo}/{mes}', function ($mess){
    $fecha = getdate();
    $mesactual=$fecha["mon"];
    $mes=$mesactual - $mess;
    return " mes{$mes}"
    ;
});

route::get('/tasks',function()
   {
});


