<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

// Enabling CORS
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

// Required route files

require __DIR__ . '/routes/authentication.php';

require __DIR__ . '/routes/products.php';

// Catch-all route to serve a 404 Not Found page if none of the routes match
// NOTE: make sure this route is defined last
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});

