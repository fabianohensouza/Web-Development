<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php
        
            $num = 1;
            while($num < 100) {
                echo "$num ";
                $num++;

                if($num == 15){
                    echo '<hr>';
                    $num = 0;
                    break;
                }
            }
            
            while ($num < 50) {
                $num++;
                if(($num % 2) == 1) {
                    continue;
                }
                echo "$num ";
            }

        ?>

    </body>
<html>