<?php

  session_start();
  
  if(!$_SESSION['auth']) {
    header('Location: index.php?login=error2');
  }
?>