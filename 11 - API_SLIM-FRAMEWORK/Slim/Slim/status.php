<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

// instantiate the App object
$app = new \Slim\App();

// Add route callbacks
$app->get('/', function ($request, $response, $args) {

	$uri = $request->getUri();
    return $response->withStatus(403)->write($uri . " - Hello World!");
});

// Run application
$app->run();

?>