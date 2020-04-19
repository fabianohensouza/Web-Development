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

    $id = $request->getAttribute('id');
    echo '{ "Route": {

                "Status": "Reached",
                "Name": "' . $id . '"
                     }
          }';

});

$app->get('/routename2[/{id}]', function($request, $response) { //The[] indicates thar the parameter is optional

    $id = $request->getAttribute('id');
    
    if ($id) {
      echo "The route " . $id . " exists!";
    } else {
      echo "We cannot found the route.";
    }

});

$app->get('/posts[/{year}[/{month}]]', function($request, $response) { //The[] indicates thar the parameter is optional

    $year = $request->getAttribute('year');
    $month = $request->getAttribute('month');
    
    if ($year) {

      echo "Posts";
      
      if ($month) {
        
        echo " of Month " . $month;
      
      }
      
      echo " of Year " . $year;
    
    } else {
      
      echo "We cannot found the posts.";
    
    }

});

$app->get('/list/{items:.*}', function($request, $response) { //Recieving any data as a parameter

    $items = $request->getAttribute('items');
    
    //echo $items;   
    
    var_dump(explode('/', $items));

});

// ---- *** Naming the routes *** ----
$app->get('/blog/posts/{id}', function($request, $response) { 

    $id = $request->getAttribute('id');
    echo "Route ID: " . $id;

})->setName("blog");

$app->get('/mysite', function($request, $response) { 

    $return = $this->get("router")->pathFor("blog", ["id" => "55"]);

    echo $return;

});

// ---- *** Grouping routes *** ---
$app->group('/v1', function() {

  $this->get('/route1', function() {

      echo 'Route 1';

  });

  $this->get('/route2', function() {

      echo 'Route 2';

  });
});

$app->run();

?>