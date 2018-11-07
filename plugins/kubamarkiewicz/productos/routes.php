<?php

// allow cross-domain requests
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

// respond to preflights
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	// return only the headers and not the content
	// only allow CORS if we're doing a GET - i.e. no saving for now.
	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']) && $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'] == 'GET') {
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Headers: X-Requested-With');
	}
	exit;
}


Route::get('/api/products', 'KubaMarkiewicz\Productos\Api\Products@index');
Route::get('/api/products/{id}', 'KubaMarkiewicz\Productos\Api\Products@get');
Route::post('/api/products', 'KubaMarkiewicz\Productos\Api\Products@create');
Route::put('/api/products/{id}', 'KubaMarkiewicz\Productos\Api\Products@update');
Route::delete('/api/products/{id}', 'KubaMarkiewicz\Productos\Api\Products@delete');
