<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            $age = 16;
            $weight = 75;

            if (($age >= 16 && $age <= 69) && ($weight >= 50)) {
                echo 'Atende as requisitos';
            } else {
                echo 'Não atende as requisitos';
            }

        ?>

    </body>
<html>