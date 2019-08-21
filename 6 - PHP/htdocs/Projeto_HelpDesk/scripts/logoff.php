<?php

    session_start();

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    //Remove session array index
    unset($_SESSION['x']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //Destroy session array
    session_destroy();

    header('Location: http://localhost/Projeto_HelpDesk/index.php?login=logoff')

  
?>