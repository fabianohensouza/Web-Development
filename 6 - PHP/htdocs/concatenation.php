<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            echo 'Olá Fabiano, vi que sua cor predefida é verde, possui 32 anos e gosta de programar!</br></br>';

            //Concatening strings using the (.) operator

            $name = 'Jorge';
            $color = 'Verde';
            $age = 29;
            $hobby = 'Jogar video-game';

            //Single quotes
            echo 'Olá ' . $name . ', vi que sua cor predefida é ' . $color . ', possui ' . $age . ' anos e gosta de ' . $hobby . '!</br></br>';
            
            //Double quotes - most slow
            echo "Olá $name, vi que sua cor predefida é $color, possui $age anos e gosta de $hobby!</br></br>";

        ?>

    </body>
<html>