<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            $text = 'texto exEMPLO';
            echo "O texto original é: $text.";
            echo '</br><hr>';

            //To LowerCase
            echo 'Tudo Minusculo</br>';
            echo strtolower($text);
            echo '</br><hr>';

            //To UpperCase
            echo 'Tudo Maiusculo</br>';
            echo strtoupper($text);
            echo '</br><hr>';

            //First letter UpperCase
            echo 'Primeira letra Maiuscula</br>';
            echo ucfirst($text);
            echo '</br><hr>';

            //String Length
            echo 'Numero de caracteres</br>';
            echo strlen($text);
            echo '</br><hr>';

            //Replace character
            echo 'Altera caracter - e por y</br>';
            echo str_replace('e', 'y', $text);
            echo '</br></br>';
            echo 'Altera caracter - ex por @@</br>';
            echo str_replace('ex', '@@', $text);
            echo '</br><hr>';

            //Return part of a String
            echo 'Retorna parte de uma string - Caractere 2 ao 9</br>';
            echo substr($text, 2, 9);
            echo '</br></br>';

        ?>

    </body>
<html>