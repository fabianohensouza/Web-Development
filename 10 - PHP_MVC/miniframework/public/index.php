<?php

	require_once "../vendor/autoload.php";
	
	$route = new \App\Route;
	echo "It's Working!!";
	echo '<pre>';
	print_r($route->getUrl());
	echo '</pre><hr>';
	echo '<pre>';
	print_r($route->getRoutes());
	echo '</pre>';

?>