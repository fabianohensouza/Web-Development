<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
           // is_array() function
           //$array = 'string';
           $array = ['String', 'Integer'];
           $result = is_array($array);
           
           if ($result) {
               echo 'Sim, a variável é um Array<hr>';
           } else {
            echo 'Não, a variável não é um Array<hr>';
           };
        
           // is_array() function
           $array2 = ['a' => 'Banana', 'b' => 'Maçã', 'x' => 'Morango', 'y' => 'Uva', '2' => 'Abacate'];
           echo '<pre>';
                print_r($array2);
            echo '</pre>';

            $array_keys = array_keys($array2);
            echo '<pre>';
                print_r($array_keys);
            echo '</pre><hr>';

            //sort array
            $array3 = ['Banana', 'Maçã', 'Abacate', 'Uva', 'Laranja'];
            echo '<pre>';
                print_r($array3);
            echo '</pre>';

            sort($array3); //Ordenate and return true or false
            echo '<pre>';
                print_r($array3);
            echo '</pre><hr>';

            //asort array - sort the array keeps the index value
            $array4 = ['Banana', 'Maçã', 'Abacate', 'Uva', 'Laranja'];
            echo '<pre>';
                print_r($array4);
            echo '</pre>';

            asort($array4); //Ordenate and return true or false
            echo '<pre>';
                print_r($array4);
            echo '</pre><hr>';

            // Count function returns how many elements in the array
            echo 'Este Array possui ' . count($array4) . ' elementos<hr>';

            // array_merge() merge one or more arraies in only one and keeps the index
            $array_full = array_merge($array, $array2, $array3, $array4);
            echo '<pre>';
                print_r($array_full);
            echo '</pre><hr>';

            //explode() - Split a string based in a delimiter and returns a array
            $string = '16/04/2020';
            $returns_arrray = explode('/', $string);
            echo $string;
            echo '<pre>';
                print_r($returns_arrray);
            echo '</pre>';

            echo 'Em formato americano: ' . $returns_arrray[2] . '-' . $returns_arrray[1] . '-' . $returns_arrray[0] . '</br>';

            //implode() - Joins the elements os a Array and returns a string
            $string = implode('-', $returns_arrray);
            echo $string . '<hr>';
        ?>

    </body>
<html>