<?php

// instantiate the App object
$app = new \Slim\App();

// Add route callbacks
$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(404)->write('Hello World!');
});

// Run application
$app->run();

?>