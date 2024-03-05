<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/clients', 'App\Http\Controllers\ClientController@index');
// Route::post('/clients', 'App\Http\Controllers\ClientController@store');
// Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show');
// Route::put('clients/{id}', 'App\Http\Controllers\ClientController@update');
// Route::put('clients/{id}', 'App\Http\Controllers\ClientController@destroy');

/* To group them, we use resource method
    Método HTTP	    Ruta	            Método del Controlador	Nombre de la Ruta
    GET	            /clients	        index	                clients.index
    POST	        /clients	        store	                clients.store
    GET	            /clients/{client}	show	                clients.show
    PUT/PATCH	    /clients/{client}	update	                clients.update
    DELETE	        /clients/{client}	destroy	                clients.destroy
*/
Route::resource('clients', ClientController::class)->except(['create', 'edit']);
Route::resource('services', ServiceController::class)->except(['create', 'edit']);

Route::post('/clients/services', 'App\Http\Controllers\ClientController@attach');
Route::post('/clients/services/detach', 'App\Http\Controllers\ClientController@detach');
Route::post('/services/clients', 'App\Http\Controllers\ServiceController@clients');