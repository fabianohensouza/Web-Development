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
        //To return olny the associatives index values use the parameter PDO::FETCH_ASSOC 
        //Use PDO::FETCH_NUM to numeric index
        //Use PDO::FETCH_OBJ to return a Object instead a Array - To access the values you should use object->value
        $query_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<pre>';
        print_r($query_data);
        echo '/<pre><hr>';

        echo 'For<br>';
        for($i = 0; $i < 3; $i++) {

            echo 'ID: '.$query_data[$i]['id'];            
            echo ' // Nome: '.$query_data[$i]['name'];
            echo ' // Email: '.$query_data[$i]['email'];
            echo ' // Senha: '.$query_data[$i]['password'].'<br>';
        }

        echo '<hr>Foreach<br>';
        foreach($query_data as $key => $value) {

            echo 'ID: '.$value['id'];            
            echo ' // Nome: '.$value['name'];
            echo ' // Email: '.$value['email'];
            echo ' // Senha: '.$value['password'].'<br>';
        }
        
        echo '<hr>Foreach - Query on running<br>';
        foreach($conexao->query($query_select) as $key => $value) {

            echo 'ID: '.$value['id'];            
            echo ' // Nome: '.$value['name'];
            echo ' // Email: '.$value['email'];
            echo ' // Senha: '.$value['password'].'<br>';
        }

        $query_select = '
            select * from tb_users where id = 8       
        ';

        $stmt = $conexao->query($query_select);
        $query_data = $stmt->fetch(PDO::FETCH_OBJ);
        echo '<hr><pre>';
        print_r($query_data);
        echo '/<pre><hr>';

        echo $query_data->name;

    } catch(PDOException $e) {
        echo 'Erro: '.$e->getCode();
        echo '<br>Mensagem: '.$e->getMessage();
    }

?>