<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            $number = 15.785;
            $number1 = -15;
            $number2 = 15.499;
            echo "Os número originais são: $number e $number2";
            echo '</br><hr>';

            //Rounding to Ceil
            echo 'Arredondando para cima</br>';
            echo ceil($number);
            echo '</br><hr>';

            //Rounding to Floor
            echo 'Arredondando para baixo</br>';
            echo floor($number);
            echo '</br><hr>';

            //Rounding value based to the decimals
            echo 'Arredendando o valor com base na fração</br>';
            echo round($number);
            echo '</br>';
            echo round($number2);
            echo '</br><hr>';

            //Generate a random integer number
            $randmax = getrandmax();
            echo "Gerando um número inteiro aleatório entre 0 e $randmax</br>";
            echo rand();
            echo '</br></br>';
            echo "Gerando um número inteiro aleatório entre 10 e 150</br>";
            echo rand(10, 150);
            echo '</br></br>';
            echo 'Gerando um número inteiro aleatório com 4 números</br>';
            $rand = (string) rand();
            echo "Original: $rand / 4 caracteres: ";
            echo substr($rand, (strlen($rand))-4, (strlen($rand))-1);
            echo '</br><hr>';

            //Calculating the square root of a number
            echo 'Calculando a raiz quadrada de um número</br>';
            echo sqrt($number);
            echo '</br></br>';

            //Converting in the absolute number
            echo "O valor absoluto de número de $number1 é: ";
            echo abs($number1);
            echo '</br></br>';

        ?>

    </body>
<html>