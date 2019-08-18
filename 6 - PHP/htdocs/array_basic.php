<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //Sequencial index
            //$fruit_list = array('Banana', 'Maçã', 'Morango', 'Uva');
            $fruit_list = ['Banana', 'Maçã', 'Morango', 'Uva'];

            //Adding a new element in the array
            $fruit_list[] = 'Abacaxi';

            //Recover a specif item in the array
            $index = 3;
            echo "A fruta na posição $index e $fruit_list[$index]<hr>";

            //Debbuging array
            echo '<pre>'; //The tag <pre> format the array show in the browser screen
                var_dump($fruit_list);
            echo '</pre>';
            echo '<pre>';
                print_r($fruit_list);
            echo '</pre>';
            echo '<hr>';

            //Associative index
            $fruit_list2 = ['a' => 'Banana', 'b' => 'Maçã', 'x' => 'Morango', 'y' => 'Uva', '2' => 'Abacate'];
            $fruit_list2['w'] = 'Abacaxi';

            echo '<pre>';
                var_dump($fruit_list2);
            echo '</pre>';

            $index = 'x';
            echo "A fruta na posição $index e $fruit_list2[$index]<hr>";
            
        ?>

    </body>
<html>