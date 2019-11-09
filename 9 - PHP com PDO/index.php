<?php

    $dsn = 'mysql:host=localhost;dbname=php_with_pdo';
    $user = 'root';
    $password = '';

    try {

        //Instancing the PDO object (DSN)
        $conexao = new PDO($dsn, $user, $password);

        /*$query_insert = '
            insert into tb_users(name, email, password)
            values
            ("Fabiano Souza","fabianohensouza@gmail.com","1234@acb");
        ';

        $conexao->exec($query_insert);

        $query_insert = '
            insert into tb_users(name, email, password)
            values
            ("Sbrina Souza","sabrina@gmail.com","7777@AAA");
        ';

        $conexao->exec($query_insert);

        $query_insert = '
            insert into tb_users(name, email, password)
            values
            ("Maria Silva","maria@gmail.com","p@55word");
        ';

        $conexao->exec($query_insert);*/

        $query_select = '
            select * from tb_users            
        ';

        $stmt = $conexao->query($query_select);
        $query_data = $stmt->fetchAll();
        /*echo '<pre>';
        print_r($query_data);
        echo '/<pre>';*/

        for($i = 0; $i < 3; $i++) {

            echo 'ID: '.$query_data[$i]['id'];            
            echo ' // Nome: '.$query_data[$i]['name'];
            echo ' // Email: '.$query_data[$i]['email'];
            echo ' // Senha: '.$query_data[$i]['password'].'<br>';
        }


    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode();
        echo '<br>Mensagem: '.$e->getMessage();
    }

?>