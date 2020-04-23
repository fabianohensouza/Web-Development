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

/* --- Container Dependence Injection ---*/

/* Creating a external class */
class Service {

}

/* Create a container using Pimple Method */
$container = $app->getContainer();
$container['service'] = function() {

  return new Service;

};

$app->get('/service', function(Request $request, Response $response){

  $service = $this->get('service');
  var_dump($service);

});

$container = $app->getContainer();
$container['Home'] = function() {

  return new MyApp\controllers\Home( new MyApp\View );

};

/* Controller as a service */
$app->get('/user', 'Home:index');

$app->run();

?>