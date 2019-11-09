<?php

    $dsn = 'mysql:host=localhost;dbname=php_with_pdo';
    $user = 'root';
    $password = '';

    try {  

        //Instancing the PDO object (DSN)
        $conexao = new PDO($dsn, $user, $password);
        $query = '
            create table tb_users(
                id int not null primary key auto_increment,
                name varchar(50) not null,
                email varchar(100)  not null,
                password varchar(32) not null
            )
        ';

        $conexao->exec($query);

        $query_insert = '
            insert into tb_users(name, email, password)
            values
            ("Fabiano Souza","fabianohensouza@gmail.com","1234@acb");
        ';

        $conexao->exec($query_insert);

        $query_delete = '
            delete from tb_users;
        ';

        $conexao->exec($query_delete);

    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode();
        echo '<br>Mensagem: '.$e->getMessage();
    }

?>