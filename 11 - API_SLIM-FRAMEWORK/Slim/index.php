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

/* --- Answer Types --- /*
/* Header/Text/JSON/XML */

$app->get('/header', function(Request $request, Response $response){

  $response->write('Header return'); //Text return
  return $response->withHeader('allow', 'PUT')				//
  			->withAddedHeader('Content-Length', 8)			//	Hearder Return
  			->withAddedHeader('Customized-Header', True);	//

});

$app->get('/json', function(Request $request, Response $response){

  $array = [
  	"main_name" => "Fabiano",
  	"sur_name" => "Souza",
  	"age" => 33
  ];

  return $response->withJson( $array); //Json return

});

$app->get('/json2', function(Request $request, Response $response){

  $json = file_get_contents('resource/json');
  $response->write($json);

  return $response->withHeader('Content-Type', 'application/json'); //Json return 2

});

$app->get('/xml', function(Request $request, Response $response){

  $xml = file_get_contents('resource/xml');
  $response->write($xml); 

  return $response->withHeader('Content-Type', 'application/xml'); //XML return

});

$app->run();

?>