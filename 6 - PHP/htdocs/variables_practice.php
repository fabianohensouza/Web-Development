<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //string
            $fullname;
            $firstname = 'Fabiano';
            $lastname = "Souza";
            
            //Concatening strings
            $fullname = $firstname. " " .$lastname;

            //Int
            $age = 29;

            //Float
            $wheight = 95.6;

            //Boolean
            $smoke = true; // true = 1 - false = empty
            
        ?>

        <h1>Fica cadastral</h1>
        <br/>
        <p>Nome: <?= $fullname?></p>
        <p>Idade: <?= $age?></p>
        <p>Peso: <?= $wheight?></p>
        <p>Fumante: <?= $smoke?></p>

    </body>
<html>