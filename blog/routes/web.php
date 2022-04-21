<?php
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

// Required Parameter
// $router->post('/{name}/{age}/{city}', function($name,$age,$city){
//     return $name.$age.$city;
// });

// Optional Parameter
$router->post('/{name}/{age}[/{city}]', function($name,$age,$city=null){
    return $name.$age.$city;
});

$router->get('/{name}', 'MyController@My');
// Json Response Body
$router->get('/response', 'MyController@Response');

//  Response Redirect And Download 
$router->get('/first', 'MyController@First');
$router->get('/second', 'MyController@Second');
$router->get('/download', 'MyController@Download');