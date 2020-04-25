<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

/* --- PSR7 Pattern ---*/

/* --- GET Method --- */
$app->get('/posts', function(Request $request, Response $response){

  /* Writing in the responde body using PDR7 pattern */
  $response->getBody()->write("Post List.");

  return $response;

});

/* --- Request types OR HTTP verbs ---
  get-> Recover Data from the Server (Select)
  post-> Create a new data in the Server (Insert)
  put-> Update data in the Server (Update)
  delete -> Delete data of the Server (Delete)
*/

/* --- POST Method --- */
$app->post('/user/add', function(Request $request, Response $response){

  /*Recovering the form date ($_POST)*/
  $post = $request->getParsedBody();
  $name = $post['name'];
  $email = $post['email'];

  /* Save in the DB with insert into */

  return $response->getBody()->write($name . ' - ' . $email);

});

/* --- PUT Method --- */
$app->put('/user/update', function(Request $request, Response $response){

  /*Recovering the form date ($_POST)*/
  $post = $request->getParsedBody();
  $id = $post['id'];
  $name = $post['name'];
  $email = $post['email'];

  /* Update data in the DB */

  return $response->getBody()->write($name . ' - ' . $email . ' - ' . $id);

});

/* --- DELETE Method --- */
$app->delete('/user/remove/{id}', function(Request $request, Response $response){

  /*Recovering the form date getAttribute Method*/
  $id = $request->getAttribute('id');

  /* Delete data in the DB */

  return $response->getBody()->write('The user id ' . $id . ' was deleted!');

});


$app->run();

?>