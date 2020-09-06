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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('silsilah',  ['uses' => 'SilsilahController@showAllSilsilah']);

  $router->get('silsilah/{id}', ['uses' => 'SilsilahController@showOneSilsilah']);
  
  $router->get('silsilah/cucu/{id}[/{jk}]', ['uses' => 'SilsilahController@showAllGrandKids']);

  $router->post('silsilah', ['uses' => 'SilsilahController@create']);

  $router->delete('silsilah/{id}', ['uses' => 'SilsilahController@delete']);

  $router->put('silsilah/{id}', ['uses' => 'SilsilahController@update']);
});