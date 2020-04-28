<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

/* Instancing the Slim App and defining the detailed errors report */
$app = new \Slim\App([

  'settings' => [
    'displayErrorDetails' => true
  ]

]);

/* Instancing the Illuminato to connect to the databases */
$container =  $app->getContainer();

$container['db'] = function() { 
  
  $capsule = new Capsule;

  $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => 'localhost',
      'database'  => 'slim',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
  ]);

  $capsule->setAsGlobal();
  $capsule->bootEloquent();

  return $capsule;

};

/*** Using Database ***/
$app->get('/users', function($request, $response) {

    //$db = $this->get('db'); or $db = $this->db;
    $db = $this->get('db')->schema() // Instancing the method Schema directly on the $db variable
    $db->dropIfExists('users'); // If the table exists it'll be droped
    $db->create('users', function($table){ // Creating the table and passing the paremeters through a anonymous function

      $table->increments('id');
      $table->string('name');
      $table->string('email');
      $table->timestamps();

    });

});

$app->run();

?>