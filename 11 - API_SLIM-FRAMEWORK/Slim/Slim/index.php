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

  $id = $request->getAttribute('id');

  $response->getBody()->write( "The user id:" . $id . " was loged!");
  $response = $next($request, $response);
  $response->getBody()->write(' - Finish Middleware layer 1!');

  return $response;

});

$app->get('/user/{id}', function(Request $request, Response $response){

  $id = $request->getAttribute('id');
  $request = $request->withAttribute('id', $id);

  $response->getBody()->write(" - UserId:" . $id . " - ");//

  return $response;

});

$app->run();

?>