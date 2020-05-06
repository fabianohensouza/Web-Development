<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Product;
use App\Models\User;
use \Firebase\JWT\JWT;

// Token Generator Route
$app->post('/api/token', function($request, $response) {

  $data = $request->getParsedBody();

  $email = $data['email'] ?? null; //  ?? null verifie if the variable has a value, if not is attributed the value NULL
  $password = $data['password'] ?? null;

  $user = User::where('email', $email)->first(); // recover the first occurance of the query

  if ( !is_null($user) && (md5($password) == $user->password)) {

    // generate a token
    $secretKey = $this->get('settings')['secretKey']; // Genereted in http://nux.net/secret
    $accessKey = JWT::encode($user, $secretKey);
    $decoded = JWT::decode($accessKey, $secretKey, array('HS256'));

    return $response->withJson([
      'key' => $accessKey,
      //'decoded' => $decoded
    ]);

  }

  return $response->withJson([
    'status' => 'error'
  ]);

});