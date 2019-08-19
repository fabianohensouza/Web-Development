<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
        $fruit_list = ['Tangerina', 'Banana', 'Maçã', 'Abacaxi', 'Uva'];
        $fruit = 'Maçã';
        echo '<pre>';
            print_r($fruit_list);
        echo '</pre><hr>';

        foreach($fruit_list as $item) {
            echo "A fruta é $item ";

            if ($item == $fruit) {
                echo "(Eu adoro $fruit)";
            }

            echo '</br>';
        }

        //Recovering array keys with Foreach

        $fruit_list2 = ['a' => 'Banana', 'b' => 'Maçã', 'x' => 'Morango', 'y' => 'Uva', '2' => 'Abacate'];

        echo '<hr><pre>';
            print_r($fruit_list2);
        echo '</pre><hr>';

        foreach($fruit_list2 as $index => $fruit) {
            echo "ID: $index - Fruta: $fruit</br>";
        }

        $employees = [ 
            ['name' => 'Joana', 'last_name' => 'Batista', 'salary' => 1500.00],
            ['name' => 'Marcelo', 'last_name' => 'Dantas', 'salary' => 3000.00],
            ['name' => 'Antonio', 'last_name' => 'Melo', 'salary' => 2500.00]
        ];

        echo '<hr><pre>';
            print_r($employees);
        echo '</pre><hr>';

        $translate_data = ['name' => 'Nome: ', 'last_name' => ' - Sobrenome: ', 'salary' => ' - Salário: '];

        foreach($employees as $index => $employee) {
            echo "Matricula: $index - ";
            foreach($employees[$index] as $data_idx => $value) {
                echo $translate_data[$data_idx], $value;
            }
            echo '</br>';
        }

        ?>

    </body>
<html>