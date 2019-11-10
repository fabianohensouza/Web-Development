<?php

    if(!empty($_POST['email']) && !empty($_POST['password'])) {

        $dsn = 'mysql:host=localhost;dbname=php_with_pdo';
        $user = 'root';
        $password = '';

        try {

            //Instancing the PDO object (DSN)
            $conection = new PDO($dsn, $user, $password);

            //Creating the QUERY
            $query = "select * from tb_users where";
            $query .= " email = '{$_POST['email']}'";
            $query .= " AND password = '{$_POST['password']}'";

            echo $query;

        } catch(PDOException $e) {
            echo 'Erro: '.$e->getCode();
            echo '<br>Mensagem: '.$e->getMessage();
        }
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="sql_injection.php">
            <input type="text" placeholder="Usuário" name="email"/>
            <br/>
            <input type="password" placeholder="Senha" name="password"/>
            <br/>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>