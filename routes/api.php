<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
route::get('/tasks', 'Taskcontroller@index');
route::post('/tasks', 'Taskcontroller@store');
route::get('/tasks/{id}', 'Taskcontroller@show');
route::get('/tasks/{id}/edit', 'Taskcontroller@edit');
route::put('/tasks/{id}', 'Taskcontroller@update');
route::delete('/tasks/28', 'Taskcontroller@destroy');


