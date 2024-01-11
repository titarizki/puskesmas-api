<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //dokter
    $router->get('/dokter', 'dokterController@index');
    $router->get('/dokter/{id}', 'dokterController@show');
    $router->post('/dokter', 'dokterController@store');
    $router->put('/dokter/{id}', 'dokterController@update');
    $router->delete('/dokter/{id}', 'dokterController@destroy');
    //jadwalpraktek
    $router->get('/jadwalpraktek', 'jadwalpraktekController@index');
    $router->get('/jadwalpraktek/{id}', 'jadwalpraktekController@show');
    $router->post('/jadwalpraktek', 'jadwalpraktekController@store');
    $router->put('/jadwalpraktek/{id}', 'jadwalpraktekController@update');
    $router->delete('/jadwalpraktek/{id}', 'jadwalpraktekController@destroy');
    //kunjungan
    $router->get('/kunjungan', 'kunjunganController@index');
    $router->get('/kunjungan/{id}', 'kunjunganController@show');
    $router->post('/kunjungan', 'kunjunganController@store');
    $router->put('/kunjungan/{id}', 'kunjunganController@update');
    $router->delete('/kunjungan/{id}', 'kunjunganController@destroy');
    //obat
    $router->get('/obat', 'obatController@index');
    $router->get('/obat/{id}', 'obatController@show');
    $router->post('/obat', 'obatController@store');
    $router->put('/obat/{id}', 'obatController@update');
    $router->delete('/obat/{id}', 'obatController@destroy');
    //pasien
    $router->get('/pasien', 'pasienController@index');
    $router->get('/pasien/{id}', 'pasienController@show');
    $router->post('/pasien', 'pasienController@store');
    $router->put('/pasien/{id}', 'pasienController@update');
    $router->delete('/pasien/{id}', 'pasienController@destroy');
    //resepobat
    $router->get('/resepobat', 'resepobatController@index');
    $router->get('/resepobat/{id}', 'resepobatController@show');
    $router->post('/resepobat', 'resepobatController@store');
    $router->put('/resepobat/{id}', 'resepobatController@update');
    $router->delete('/resepobat/{id}', 'resepobatController@destroy');


});