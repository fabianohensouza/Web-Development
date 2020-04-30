<?php

/*if (PHP_SAPI != 'cli') {
    // This condition forces this file only be executed by a command line
    // It cannot be accessed by a Web Server
    exit ('</br>This script only can be accessed by a command line.</br> Run this file through the command "php db.php"');
    }*/

require __DIR__ . '/vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/src/dependencies.php';

$db = $container->get('db');

$schema = $db->schema();
$tabela = 'produtos';

$schema->dropIfExists( $tabela );

// Cria a tabela produtos
$schema->create($tabela, function($table){
  
  $table->increments('id');
  $table->string('titulo', 100);
  $table->text('descricao');
  $table->decimal('preco', 11, 2);
  $table->string('fabricante', 60);
  $table->timestamps();

});

?>