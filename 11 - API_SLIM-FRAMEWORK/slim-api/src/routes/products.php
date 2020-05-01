<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->group('/api/v1', function() {

  $this->get('/products', function($request, $response) {

      return $response->withJson(['name' => 'Xiaome Mi A8']);

  });

  $this->get('/route2', function($request, $response) {

      echo 'Route 2';

  });
});