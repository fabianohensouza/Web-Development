<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //AND or && - All conditions are true
            if (true AND true) {
                echo 'true AND true - Verdadeiro</br>';
            } else {
                echo 'true AND true - Falso</br>';
            }
            if (true && false) {
                echo 'true && false - Verdadeiro</br><hr>';
            } else {
                echo 'true && false - Falso</br><hr>';
            }

            //OR or || - At least one condition is true
            if (true OR true) {
                echo 'true OR true - Verdadeiro</br>';
            } else {
                echo 'true OR true - Falso</br>';
            }
            if (false || false) {
                echo 'false || false - Verdadeiro</br>';
            } else {
                echo 'false || false - Falso</br>';
            }
            if (true || false) {
                echo 'true || false - Verdadeiro</br><hr>';
            } else {
                echo 'true || false - Falso</br><hr>';
            }

            //XOR - Only one condition is true
            if (true XOR true) {
                echo 'true XOR true - Verdadeiro</br>';
            } else {
                echo 'true XOR true - Falso</br>';
            }
            if (true XOR false) {
                echo 'true XOR false - Verdadeiro</br><hr>';
            } else {
                echo 'true XOR false - Falso</br><hr>';
            }

            //! - Reverse the condition result
            if (!true AND !true) {
                echo '!true AND !true - Verdadeiro</br>';
            } else {
                echo '!true AND !true - Falso</br>';
            }
            if (!false AND !false) {
                echo '!false AND !false - Verdadeiro</br><hr>';
            } else {
                echo '!false AND !false - Falso</br><hr>';
            }

        ?>

    </body>
<html>