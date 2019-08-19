<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
            for( $i = 0; $i < 100; $i++) {
                if(($i % 2) == 1) {
                        continue;
                }
                echo "$i ";

                if($i == 52) {
                    echo "<br>Break e Tchau!!!";
                    break;
                }
            }    

        ?>

    </body>
<html>