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
///auth
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//HINT: to return 401 unauthorized it needs to send key: Accept and Value: application/json.


// cria novo cliente
Route::post('userLogin','UserController@login');
Route::post('userRegister','UserController@register');

Route::group(['middleware' => 'auth:api', 'prefix' => 'clientes'], function() {

	//lista de clientes
	Route::get('all', 'ClienteController@index');
	//pega cliente especifico
	Route::get('get/{id}','ClienteController@show');
	// cria novo cliente
	Route::post('create','ClienteController@store');
	// update o cliente
	Route::put('update','ClienteController@update');
	// deleta o cliente
	Route::delete('delete','ClienteController@destroy');
});


