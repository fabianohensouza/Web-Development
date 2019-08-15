<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            $num1 = 5;
            $num2 = 5;
            $num3 = 5;
            $num4 = 5;

            $num1 += 4;
            $num2 -= 4;
            $num3 *= 4;
            $num4 /= 4;
            echo "$num1</br> $num2</br> $num3</br> $num4</br><hr>"

        ?>

        <h3>Pós-Incremento</h3>
        <?php

            $a = 7;

            echo "O valor de a é $a </br>";
            echo 'O valor de a após o  incremento é ' . $a++ . '</br>';
            echo "O valor de a atualizado é $a </br>";

        ?>

        <h3>Pré-Incremento</h3>
        <?php

            $a = 7;

            echo "O valor de a é $a </br>";
            echo 'O valor de a após o  incremento é ' . ++$a . '</br>';

        ?>

        <h3>Pós-Decremento</h3>
        <?php

            $a = 7;

            echo "O valor de a é $a </br>";
            echo 'O valor de a após o  decremento é ' . $a-- . '</br>';
            echo "O valor de a atualizado é $a </br>";

        ?>

        <h3>Pré-Decremento</h3>
        <?php

            $a = 7;

            echo "O valor de a é $a </br>";
            echo 'O valor de a após o  decremento é ' . --$a . '</br>';

        ?>

    </body>
<html>