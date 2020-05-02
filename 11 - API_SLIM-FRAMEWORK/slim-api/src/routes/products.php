<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;

$app->group('/api/v1', function() {

  $this->get('/products/list', function($request, $response) {

      $products = Product::get();
      return $response->withJson($products);

  });

  $this->post('/products/add', function($request, $response) {

      $data = $request->getParsedBody();
      $products = Product::create();

      return $response->withJson($products);

  });

});