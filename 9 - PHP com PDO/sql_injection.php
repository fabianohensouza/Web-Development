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
            $query .= " email = :email";
            $query .= " AND password = :password";

            //Preparing the query to be executed after SQL Injection treatment
            $stmt = $conection->prepare($query);

            //Analyzing if thereis SQL Injection
            //bindValue(':bind_variable', sql_statement, data_type-optional)
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->bindValue(':password', $_POST['password'], PDO::PARAM_INT);

            //Execute the query afterSQL Injection treatment
            $stmt->execute();

            //Fetching the data
            $user = $stmt->fetch();

            print_r($user);

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