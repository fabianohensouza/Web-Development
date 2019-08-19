<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
           //false - boolean variable type
           //null and empty - special values
           $employee1 = null;
           $employee2 = '';
           $employee3 = false;

           if (is_null($employee1)) {
                echo 'Sim, a variavel está vazia';
           } else {
            echo 'Não, a variavel não está vazia';
           }

           echo '</br>';

           if (is_null($employee2)) {
                echo 'Sim, a variavel está vazia';
           } else {
            echo 'Não, a variavel não está vazia';
           }

           echo '</br>';

           if (is_null($employee3)) {
                echo 'Sim, a variavel está vazia';
           } else {
            echo 'Não, a variavel não está vazia';
           }

           echo '</br><hr>';

           if (empty($employee2)) {
                echo 'Sim, a variavel está vazia';
           } else {
                echo 'Não, a variavel não está vazia';
           } 

           echo '</br>';

           if (empty($employee2)) {
                echo 'Sim, a variavel está vazia';
           } else {
                echo 'Não, a variavel não está vazia';
           }

           echo '</br>';

           if (empty($employee3)) {
                echo 'Sim, a variavel está vazia';
           } else {
                echo 'Não, a variavel não está vazia';
           } 

           echo '</br><hr>';
            
        ?>

    </body>
<html>