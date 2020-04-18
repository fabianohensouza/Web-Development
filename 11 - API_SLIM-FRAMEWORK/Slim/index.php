<?php

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/route', function() {

    echo '{ "Route": {

                "Status": "Reached"
                     }
          }';

});

$app->get('/routename/{id}', function($request, $response) {

    $id = $request->getAttibute('id');
    echo '{ "Route": {

                "Status": "Reached"
                "Name": ' .$id . '
                     }
          }';

});

$app->run();

?>