<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/products', 'ProductsController@index');
$router->get('/products/{id}', 'ProductsController@show');

$router->post('/products', 'ProductsController@add');

$router->get('/stores', 'StoresController@show');

$router->get('/reviews', 'ReviewsController@show');
