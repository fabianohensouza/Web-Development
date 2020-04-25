<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

/* Instancing the Slim App and defining the detailed errors report */
$app = new \Slim\App([

  'settings' => [
    'displayErrorDetails' => true
  ]

]);

/*** Using Middleware ***/
$app->add( function($request, $response, $next){ //Middleware 1

  $response->getBody()->write(' - Start Middleware layer 1! - ');
  $response = $next($request, $response);
  $response->getBody()->write(' - Finish Middleware layer 1!');

  return $response;

});

$app->add( function($request, $response, $next){ //Middleware 

  $response->getBody()->write(' - Start Middleware layer 2! - ');
  $response = $next($request, $response);
  $response->getBody()->write(' - Finish Middleware layer 2!');

  return $response;

});

$app->get('/users', function(Request $request, Response $response){

  $response->getBody()->write(' Users action! ');//

  return $response;

});


$app->get('/posts', function(Request $request, Response $response){

  $response->getBody()->write(' Post action! ');//

  return $response;

});

$app->run();

?>