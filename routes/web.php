<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\TestController;

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('hello',function(){
//     return 'Hello rasdi';
// });

// $router->get('coba','TestController@index');

// $router->get('test/{name}','TestController@nama');
// $router->get('/{halaman}/test/{judul}', 'TEstController@blog');
// $router->get('/admin','TestController@admin');

$router->post('catatan','CatatanController@create');
$router->get('catatan','CatatanController@index');
$router->get('catatan/{id}','CatatanController@show');
$router->put('catatan/{id}','CatatanController@update');
$router->delete('catatan/{id}','CatatanController@delete');