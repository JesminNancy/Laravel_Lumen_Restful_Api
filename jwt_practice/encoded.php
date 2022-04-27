<?php 

use \Firebase\JWT\JWT;
include 'vendor/autoload.php';

$key = '12349862';
$payload = [
    'name' => 'jesmin',
    'pass' => '123456789',
    'mobile' => '99999999999',
    'city' => 'dhaka'
];

$encode= JWT::encode($payload, $key, 'HS256');

echo $encode;


?>