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

$router->get('/get', function () use ($router) {
    return "I am get";
});

$router->post('/post', function () use ($router) {
    return "I am post";
});

$router->put('/put', function () use ($router) {
    return "I am put";
});

$router->delete('/delete', function () use ($router) {
    return "I am delete";
});

$router->post('/jesmin', function(){

    return "I am Jesmin Akther Nancy";
});
