<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //To create constants you should use the function define('NAME', 'value')
            define('BD_URL', 'bd_dev_address');
            define('BD_USER', 'dev_user');
            define('BD_PASSWORD', 'bd_dev_password');

            //To recover the value of a constant don't use $ prefix
            echo BD_URL .  '</br>';
            echo BD_USER .  '</br>';
            echo BD_PASSWORD .  '</br>';
            
        ?>

    </body>
<html>