<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;

// Token Generator Route
$app->post('/api/token', function($request, $response) {

  $user = ['email' => 'teste@teste.com', 'password' => '1234'];

  $data = $request->getParsedBody();

  $email = $data['email'] ?? null; //  ?? null verifie if the variable has a value, if not is attributed the value NULL
  $password = $data['password'] ?? null;

  if ($email ==  $user['email'] && $password ==  $user['password']) {
  	
  	echo 'OK!';

  } else {
  	
  	echo 'NO!';

  }

});