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

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::group(['middleware' => 'oauth'], function() {

	Route::get('produto/{id}/estoque', 'EstoqueController@index');
	Route::get('produto/{id}/estoque/{idLoja}', 'EstoqueController@show');
	Route::match(['patch', 'put'], 'produto/{id}/estoque/{idLoja}', 'EstoqueController@update');

	Route::resource('produto', 'ProdutoController', ['except' => ['create', 'edit']]);
	Route::resource('cliente', 'ClienteController', ['except' => ['create', 'edit']]);
	Route::resource('os', 'OsController', ['except' => ['create', 'edit']]);
	Route::resource('grupo', 'GrupoController', ['except' => ['create', 'edit']]);
	Route::resource('subgrupo', 'SubgrupoController', ['except' => ['create', 'edit']]);
	Route::resource('marca', 'MarcaController', ['except' => ['create', 'edit']]);

});