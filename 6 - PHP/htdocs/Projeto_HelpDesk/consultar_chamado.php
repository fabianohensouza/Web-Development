<? require_once "scripts/access_validator.php"; print_r($_SESSION) ?>

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
        <? include_once "elements/login_status.php" ?>

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?  foreach($service_orders as $value) { ?>
                            
                <?php

                  $returns_os = explode('#@', $value);
                  $os_status = (integer) $returns_os[6];
                  if($os_status == 2) {
                    echo 'Chamado ' . $returns_os[0] . ' fechado!</br>';
                    continue;
                  }

                  if($_SESSION['profile'] == 2) {
                    if($_SESSION['id'] != $returns_os[4]) {
                      continue;
                    }
                  }
                ?>
                    <div class="card mb-3 bg-light">
                      <div class="card-body">
                        <h5 class="card-title"><?=$returns_os[0] . ' - ' . $returns_os[1]?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?=$returns_os[2]?></h6>
                        <p class="card-text"><?=$returns_os[3]?></p>
                        <h6 class="card-text"><small><?='Técnico responsável: ' . $returns_os[5]?></small></h6>

                      </div>
                    </div>
              <?  } ?>
              

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