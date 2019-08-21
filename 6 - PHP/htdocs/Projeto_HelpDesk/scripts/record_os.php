<?php

    session_start();

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    /*
    $title = str_replace('#@', '-', $_POST['title']);
    $category = str_replace('#@', '-', $_POST['category']);
    $description = str_replace('#@', '-', $_POST['description']);
    */

    //$text = $title . '#@' . $category . '#@' . $description;

    foreach($_POST as $index => $value) {
        $value = str_replace('#@', '-', $value);
        $_POST[$index] = $value;
    }

    $text = implode('#@', $_POST). PHP_EOL;

    //Recording data into the file

    $file = fopen('data_files/file.txt', 'a');

    fwrite($file, $text);

    fclose($file);

    echo $text;

    header('Location: http://localhost/Projeto_HelpDesk/abrir_chamado.php?status=open')
  
?>