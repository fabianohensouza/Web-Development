<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/comovai/{name}', function ($request, $response) {
    $name = $request->getAttribute('name');
    echo "Como vai você, ". $name ."!";

    return $response;
});

$app->get('/lista/{itens:.*}', function ($request, $response) {
    
    $item = $request->getAttribute('itens');
    
    $itens = var_dump(explode("/", $item));

    print_r($itens);

});

$app->get('/date[/{year}[/{month}]]', function ($request, $response) {
    $year = $request->getAttribute('year');
    $month = $request->getAttribute('month');

    if ($month == '') {
    	$month = 'N/A';
    }

    if ($year == '') {
    	$year = 'N/A';
    }

    echo "A data selecionada foi: Mês ". $month ." e Ano ". $year .".";

    return $response;
});

//Naming routes
$app->get('/blog/postagens/{id}', function ($request, $response) {
    
    echo "Listar postagens com ID: ";
})->setName("blog");

$app->get('/meusite', function($request, $response) {
    
    $return =  $this->get("router")->pathFor("blog", ["id" => "10"]);
    echo $return;

});

//Grouping routes
$app->group('/v1', function() {
    
    $this->get('/users', function() {
    	echo "Lista de usuários";
    });
    
    $this->get('/posts', function() {
    	echo "Lista de postagens";
    });

});


$app->run();

?>