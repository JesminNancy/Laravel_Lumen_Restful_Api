<?php 

use \Firebase\JWT\JWT;
use Firebase\JWT\Key;
include 'vendor/autoload.php';

$key = '12349862';
$encode="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiamVzbWluIiwicGFzcyI6IjEyMzQ1Njc4OSIsIm1vYmlsZSI6Ijk5OTk5OTk5OTk5IiwiY2l0eSI6ImRoYWthIn0.l_zTYeWgT62OGKkvpvbXV24iXA0I6qhBUssJWcmfRK4";

$decoded = JWT::decode($encode, new Key($key, 'HS256'));

print_r($decoded);

?>