<?php

    //Recovering parameters sended by the logon page by its name in the array $_GET
    
    /*$_GET['email'];
      $_GET['password'];*/

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
        $_SESSION['auth'] = true;
        $_SESSION['x'] = '@';
        $_SESSION['y'] = 'TTTTTT';
        header('Location: home.php');
    } else {
        $_SESSION['auth'] = false;
        header('Location: index.php?login=error');
    }

    echo '<hr>'; 

?>