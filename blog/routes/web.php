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

// Sending And Catching(Request Class)
$router->post('/catch', 'MyController@Catch');
// Check Database Connection
$router->get('/database', 'MyController@testConn');

// Basic CRUD Operation
$router->get('/details', 'DetailsController@detailsSelect');
$router->post('/details', 'DetailsController@detailsCreate');
$router->put('/details', 'DetailsController@detailsUpdate');
$router->delete('/details', 'DetailsController@detailsDelete');

// Query Builder
$router->get('/builder', 'BuilderController@detailsSelect');
$router->get('/singlerow', 'BuilderController@SingleRows');
$router->get('/aggregates', 'BuilderController@Aggregates');
$router->post('/builder', 'BuilderController@Insert');
$router->put('/builder', 'BuilderController@Update');
$router->delete('/builder', 'BuilderController@Delete');

// Use Models
$router->get('/select', 'DemoController@SelectAll');

$router->get('/select', ['middleware'=>'auth','uses'=>'DemoController@SelectAll']);

$router->post('/select', 'DemoController@SelectById');
$router->get('/count', 'DemoController@Count');
$router->get('/min', 'DemoController@Min');
$router->get('/max', 'DemoController@Max');
$router->get('/avg', 'DemoController@Avg');
$router->get('/sum', 'DemoController@Sum');

$router->post('/insert', 'DemoController@Insert');
$router->put('/update', 'DemoController@Update');
$router->delete('/delete', 'DemoController@Delete');