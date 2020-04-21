<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

/* --- Container Dependence Injection ---*/

/* Creating a external class */
class Service {

}

/* Create a container using Pimple Method */
$container = $app->getContainer();
$container['service'] = function() {

  return new Service;

};

$app->get('/service', function(Request $request, Response $response) use ($service){

  $service = $this->get('service');
  var_dump($service);

});

/* Controller as a service */
$app->get('/user', 'MyApp\controlles\Home:index');

$app->run();

?>