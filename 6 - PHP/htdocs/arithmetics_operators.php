<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            $num1 = 9;
            $num2 = 2;

            //Adition
            echo "A soma entre $num1 e $num2 = " . + ($num1 + $num2);
            echo '</br>';

            //Subtraction
            echo "A subtração entre $num1 e $num2 = " . + ($num1 - $num2);
            echo '</br>';

            //Multiplication
            echo "A multiplacation entre $num1 e $num2 = " . + ($num1 * $num2);
            echo '</br>';

            //Divisão
            echo "A divisão entre $num1 e $num2 = " . + ($num1 / $num2);
            echo '</br>';
            
            //Integer division
            $division = $num1 / $num2;
            $division = (integer) $division;
            $module = $num1 % $num2;

            echo "A divisão inteira de $num1 por $num2 é igual a $division e sobra $module";
            echo '</br>';

        ?>

    </body>
<html>