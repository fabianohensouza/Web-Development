<?php

//use Slim\App;

//return function (App $app) {
    // e.g: $app->add(new \Slim\Csrf\Guard);
//};

//Using Middleware to add Hearder in each request to all API from any Domain (*)
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});
