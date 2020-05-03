<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;

$app->group('/api/v1', function() {

  // List all Products
  $this->get('/products/list', function($request, $response) {

      $products = Product::get();
      return $response->withJson($products);

  });

  // List a given Product by ID
  $this->get('/products/list/{id}', function($request, $response, $args) {
  	
      $products = Product::findOrFail($args['id']);
      return $response->withJson($products);

  });

  // Add Products
  $this->post('/products/add', function($request, $response) {

      $data = $request->getParsedBody();
      $products = Product::create($data);

      return $response->withJson($products);

  });

  // Update Products by ID
  $this->put('/products/update/{id}', function($request, $response, $args) {

  	  $data = $request->getParsedBody();
      $products = Product::findOrFail($args['id']);
  	  $products->update($data);

      return $response->withJson($products);

  });

  // Delete Products by ID
  $this->delete('/products/delete/{id}', function($request, $response, $args) {

  	  $products = Product::findOrFail($args['id']);
  	  $products->delete();

      return $response->withJson($products);

  });

});