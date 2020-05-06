<?php

use Tuupola\Middleware\JwtAuthentication;

//use Slim\App;

//return function (App $app) {
    // e.g: $app->add(new \Slim\Csrf\Guard);
//};

// Middleware to create JWT Token
$app->add(new JwtAuthentication([
    "header" => "X-Token",
    "regexp" => "/(.*)/",
    "path" => "/api",
    "ignore" => ["/api/token"],
    "secret" => $container->get('settings')['secretKey']
]));

//Using Middleware to add Hearder in each request to all API from any Domain (*)
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
}, 402);
