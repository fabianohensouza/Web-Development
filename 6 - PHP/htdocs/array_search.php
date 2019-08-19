<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
            function translateBoolean($value) {
                if ($value == 1) {
                    return 'Verdadeiro';
                } else if ($value == null) {
                    return 'Falso';
                }
            }
            
            //in_array() search function - 1 to true / null to false
            $fruit_list = ['Banana', 'Maçã', 'Morango', 'Uva', 'Morango'];

            echo '<pre>';
                print_r($fruit_list);
            echo '</pre>';

            $fruit_search = 'Morango';
            $result_test = translateBoolean(in_array($fruit_search, $fruit_list));
            echo "O valor $fruit_search existe no array pesquisado? $result_test</br>";

            //array_search() function returns the index of the searched values
            if ($result_test == 'Verdadeiro') {
                $result_position = array_search($fruit_search, $fruit_list);
                echo "A fruta $fruit_search está na posição $result_position do Array.<hr>";
            } else {
                echo "A fruta $fruit_search não está presente no Array.<hr>";
            }

            //Creating a multidimensional array
            $things_list = [];
            $things_list = [
                'fruits' => $fruit_list,
                'people' => ['João', 'José', 'Maria', 'Antonia']
            ];

            echo '<pre>';
                print_r($things_list);
            echo '</pre>';

            $array = 'people';
            $people_search = 'Antonia';

            $result_test = translateBoolean(in_array($people_search, $things_list[$array]));
            echo "O nome $people_search existe no array pesquisado? $result_test</br>";

            if ($result_test == 'Verdadeiro') {
                $result_position = array_search($people_search, $things_list[$array]);
                echo "O nome $people_search está na posição $result_position do Array.<hr>";
            } else {
                echo "O nome $people_search não está presente no Array.<hr>";
            }
            
        ?>

    </body>
<html>