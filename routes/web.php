<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function () use ($router) {
    return $router->app->version();
});

/* $router->get('/topics', 'TopicController@index');
$router->get('/topics/{id}', 'TopicController@show');
$router->post('/topics', 'TopicController@store');
$router->put('/topics/{id}', 'TopicController@update');
$router->delete('/topics/{id}', 'TopicController@destroy');

$router->get('/users', 'UserController@index');
$router->get('/users/{id}', 'UserController@show');
$router->post('/users', 'UserController@store');
$router->put('/users/{id}', 'UserController@update');
$router->delete('/users/{id}', 'UserController@destroy'); */

function resource($router, $url, $model){
    $router->get($url, $model.'Controller@index');
    $router->get($url.'/{id}', $model.'Controller@show');
    $router->post($url, '$model.TController@store');
    $router->put($url.'/{id}', $model.'Controller@update');
    $router->delete($url.'/{id}', $model.'Controller@destroy');
}

resource($router, '/topics', 'Topic');
resource($router, '/users', 'User');