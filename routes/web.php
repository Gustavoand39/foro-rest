<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router -> get('/login', 'AuthController@login');

$router->get('/', function () use ($router) {
    return $router->app->version();
});

function resource($router, $url, $model){
    $router->get($url, $model.'Controller@index');
    $router->get($url.'/{id}', $model.'Controller@show');
    $router->post($url, '$model.TController@store');
    $router->put($url.'/{id}', $model.'Controller@update');
    $router->delete($url.'/{id}', $model.'Controller@destroy');
}

$router -> group(['middleware' => 'auth'], function() use($router){
    resource($router, '/topics', 'Topic');
    resource($router, '/users', 'User');
});