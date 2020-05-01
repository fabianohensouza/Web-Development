<?php

if (PHP_SAPI != 'cli') {
    // This condition forces this file only be executed by a command line
    // It cannot be accessed by a Web Server
    exit ('</br>This script only can be accessed by a command line.</br> Run this file through the command "php db.php"');
}

require __DIR__ . '/vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/src/dependencies.php';

$db = $container->get('db');

$schema = $db->schema();
$table = 'products';

$schema->dropIfExists( $table );

// Creating the table products
$schema->create($table, function($table){
  
  $table->increments('id');
  $table->string('title', 100);
  $table->text('description');
  $table->decimal('price', 11, 2);
  $table->string('manufacturer', 60);
  $table->timestamps();

});

// Filling the table
$db->table($table)->insert([
    'title' => 'Smartphone Motorola Moto G6 32GB Dual Chip',
    'description' => 'Android Oreo - 8.0 Tela 5.7" Octa-Core 1.8 GHz 4G Câmera 12 + 5MP (Dual Traseira) - Índigo',
    'price' => 899.00,
    'manufacturer' => 'Motorola',
    'created_at' => '2019-10-22',
    'updated_at' => '2019-10-22'
]);

$db->table($table)->insert([
    'title' => 'iPhone X Cinza Espacial 64GB',
    'description' => 'Tela 5.8" IOS 12 4G Wi-Fi Câmera 12MP - Apple',
    'price' => 4999.00,
    'manufacturer' => 'Apple',
    'created_at' => '2020-10-01',
    'updated_at' => '2020-10-01'
]);

$db->table($table)->insert([
    'title' => 'Xiaomi Mi A8 64GB',
    'description' => 'Tela 5.8" Android 11 4G Wi-Fi Câmera 12MP',
    'price' => 1999.00,
    'manufacturer' => 'Xiaomi',
    'created_at' => '2020-10-01',
    'updated_at' => '2020-10-01'
]);
