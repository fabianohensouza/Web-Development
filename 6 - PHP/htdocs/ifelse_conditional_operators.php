<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            if (3 == 2) {
                echo 'Verdadeiro</br>';
            } else {
                echo 'Falso</br>';
            }
            
            if (3 != 2) {
                echo 'Verdadeiro</br>';
            } else {
                echo 'Falso</br>';
            }
            
            if (3 === '3') {
                echo 'Verdadeiro</br>';
            } else {
                echo 'Falso</br>';
            }
            
            if ('x' !== 'x') {
                echo 'Verdadeiro</br>';
            } else {
                echo 'Falso</br>';
            }
            
            if (2 < 3) {
                echo 'Verdadeiro</br>';
            } else {
                echo 'Falso</br>';
            }
            
            if (4 > 4) {
                echo 'Verdadeiro</br>';
            } else {
                echo 'Falso</br>';
            }

            //If doesn't have else statement and the if has only one instruction you can omit the comas {}
            if (true) echo 'If em uma linha';

        ?>

    </body>
<html>