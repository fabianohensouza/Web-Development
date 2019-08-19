<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
            $num = 10;
            
            do{
                echo "Num é igual a $num ";
                $num++;
            } while($num < 9);

            echo '<br>';
            
            do {
                echo "$num % 2 = " . ($num % 2); 
            } while (($num % 2) == 0);

        ?>

    </body>
<html>