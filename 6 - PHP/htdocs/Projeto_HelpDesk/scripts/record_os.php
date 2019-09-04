<?php

    session_start();

    function generateOSNumber($file_lines, $file_path) {
        //Open file and save its reference in a variable
        $file = fopen($file_path, 'r');
        //echo 'Numero de linha: ' . $file_lines . '<hr>';

        if ($file_lines && $file_lines > 0) {
            //while(!feof($file)) {
            for ($i = 0; $i < $file_lines; $i++) {
                //read lines of a file
                $record = fgets($file);
            }

            echo 'Variavel record: ' . $record . '<hr>';

            $service_order = explode('#@', $record);
            echo $service_order[0] . '</br>';
    
            //$os_number = $service_order[0];
            $os_number = ((integer) $service_order[0]) + 1;

        } else {

            $os_number = 1;
        }

        //Close file
        fclose($file);

        //formating the os number
        $os_number = (string) $os_number;
        $number = strlen($os_number);

        for($i = $number; $i < 4; $i++) {
            $os_number = '0' . $os_number;
        }

        return $os_number;

    }

    /*
    $title = str_replace('#@', '-', $_POST['title']);
    $category = str_replace('#@', '-', $_POST['category']);
    $description = str_replace('#@', '-', $_POST['description']);
    */

    //$text = $title . '#@' . $category . '#@' . $description;

    $file_path = '/home/fabiano/Cursos/Curso de Desenvolvimento WEB/6 - PHP/scripts_projeto_helpDesk/data_files/file.txt';

    //Count numbers of line lines of a file
    $file_lines = count(file($file_path));

    $os_number = generateOSNumber($file_lines, $file_path);

    foreach($_POST as $index => $value) {
        $value = str_replace('#@', '-', $value);
        $_POST[$index] = $value;
    }

    $text = $os_number . '#@' . implode('#@', $_POST) . '#@' . $_SESSION['id'] . '#@' . $_SESSION['user_name'] . '#@open'. PHP_EOL;

    //Recording data into the file

    $file = fopen($file_path, 'a');

    fwrite($file, $text);

    fclose($file);

    header('Location: http://localhost/Projeto_HelpDesk/abrir_chamado.php?status=open')
  
?>