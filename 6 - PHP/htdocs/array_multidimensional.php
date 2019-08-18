<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //Creating a multidimensional array
            $things_list = [];
            $things_list['fruits'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
            $things_list['people'] = [1 => 'João', 2 => 'José', 3 => 'Maria', 4 => 'Antonia'];

            $index1 = 'people';
            $index2 = 2;

            $things_list[$index1][5] = 'Marcelo';
            
            echo '<pre>';
                //var_dump($things_list);
                print_r($things_list);
            echo '</pre><hr>';

            echo "O valor na posição $index2 do Array $index1 é " . $things_list[$index1][$index2];
            
        ?>

    </body>
<html>