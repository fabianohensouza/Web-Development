<?php

    //Recovering parameters sended by the logon page by its name in the array $_GET
    
    /*print_r($_GET);
    
    echo '</br>';
    echo $_GET['email'];
    echo '</br>';
    echo $_GET['password'];*/

    //Initializing the session resource - Always before  any output of data
    session_start();

    //Recovering parameters sended by the logon page by its name in the array $_POST
    print_r($_POST);
    
    $login = $_POST['email'];
    $password = $_POST['password'];
    echo '<hr>';

    $users = array(
        ['user' => 'admin@teste', 'password' => '123', 'name' => 'Administrador'],
        ['user' => 'manager@teste', 'password' => '123', 'name' => 'Gerente'],
        ['user' => 'user@teste', 'password' => '123', 'name' => 'Usuário'],
        );

        $sucess = false;

    foreach($users as $id => $user) {
        echo $id . ' - ' . $user['user'] . ' - ' . $user['password'] . ' - ' . $user['name'] . '<br>';
        if($login == $user['user'] && $password == $user['password']) {
            $sucess = true;
            break;
        } 
    }

    echo '<hr>'; 
    
    if($sucess) {
        echo 'O usuário ' . $user['name'] . ' foi autenticado com sucesso.</br>';
        echo 'ID: ' . $id . ' / Senha: ' . $password . ' / ' . $user['password'];
        $_SESSION['auth'] = true;
    } else {
        $_SESSION['auth'] = false;
        header('Location: index.php?login=error');
        //echo 'Usuário ou senha inválidas.';
    }

    echo '<hr>'; 

?>