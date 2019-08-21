<? require_once "scripts/access_validator.php" ?>

<?php

  $service_orders = array();
  //Open file and save its reference in a variable
  $file = fopen('scripts/data_files/file.txt', 'r');

  while(!feof($file)) {
    //read lines of a file
    $record = fgets($file);
    $service_orders[] = $record;
  }

  //Close file
  fclose($file);

  //Erase the last line of the file
  if ($service_orders[count($service_orders) - 1] == '') {
    unset($service_orders[count($service_orders) - 1]);
  }

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <? include_once "elements/menu.php" ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              <?php

                foreach($service_orders as $value) {

                $returns_os = explode('#@', $value);
              ?>
                  <div class="card mb-3 bg-light">
                    <div class="card-body">
                      <h5 class="card-title"><?=$returns_os[0]?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?=$returns_os[1]?></h6>
                      <p class="card-text"><?=$returns_os[2]?></p>

                    </div>
                  </div>
              <? } ?>
              

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>