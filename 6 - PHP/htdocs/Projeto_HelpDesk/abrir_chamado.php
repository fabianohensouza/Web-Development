<? require_once "scripts/access_validator.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 

    <? if(isset($_GET['status']) && $_GET['status'] == 'open') { ?>

      <script>
        alert('teste');
        location.replace("http://localhost/Projeto_HelpDesk/abrir_chamado.php")
      </script>

    <? } ?>
    
    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="scripts/record_os.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="title" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <? include_once "elements/categories.php" ?> 
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  </body>
</html>