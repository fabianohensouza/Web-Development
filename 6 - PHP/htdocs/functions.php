<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            function showWelcome($name) {
                echo "Bem-Vindo ao site $name!</br>";
            }

            function calculateArea($width, $height) {
                return $width * $height;
            }

            $name = 'Fabiano';
            showWelcome($name);
            $area = calculateArea(10, 15);
            echo "A área do terreno é $area.</br>";

        ?>

    </body>
<html>