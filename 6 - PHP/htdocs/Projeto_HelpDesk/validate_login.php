<?php

    //Recovering parameters sended by the logon page by its name in the array $_GET
    
    /*$_GET['email'];
      $_GET['password'];*/

    //Initializing the session resource - Always before  any output of data
    session_start();

    //Recovering parameters sended by the logon page by its name in the array $_POST
    
    $login = $_POST['email'];
    $password = $_POST['password'];
    echo '<hr>';

    $profile = [1 => 'Administrador', 2 => 'Usuário'];

    $users = array(
        ['id' => 1, 'user' => 'admin@teste', 'password' => '123', 'name' => 'Administrador', 'profile_id' => 1],
        ['id' => 2, 'user' => 'manager@teste', 'password' => '123', 'name' => 'Gerente', 'profile_id' => 1],
        ['id' => 3, 'user' => 'user@teste', 'password' => '123', 'name' => 'Usuário', 'profile_id' => 2],
        ['id' => 4, 'user' => 'joao@teste', 'password' => '123', 'name' => 'João', 'profile_id' => 2],
        );

        $sucess = false;
        $user_id = null;
        $user_profile_id = null;
        $user_name = null;
        $user_profile_name = null;

    foreach($users as $user) {
        if($login == $user['user'] && $password == $user['password']) {
            $sucess = true;
            $user_id = $user['id'];
            $user_profile_id = $user['profile_id'];
            $user_name = $user['name'];
            $user_profile_name = $profile[$user_profile_id];
            break;
        } 
    }

    echo '<hr>'; 
    
    if($sucess) {
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $user_id;
        $_SESSION['profile'] = $user_profile_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['profile_name'] = $user_profile_name;
        header('Location: home.php');
    } else {
        $_SESSION['auth'] = false;
        header('Location: index.php?login=error');
    }

?>