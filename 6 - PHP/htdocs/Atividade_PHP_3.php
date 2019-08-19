<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            $mega_sena = [];

            for($i = 0; $i < 6; $i++) {
                
                do {
                    $number = rand(1, 60);
                } while(in_array($number, $mega_sena));

                $mega_sena[] = $number;
            }

            echo '<pre>';
                print_r($mega_sena);
            echo '</pre><hr>';

            echo 'Números da MEGA-SENA: ';

            foreach($mega_sena as $number) {
                echo "$number ";
            }
        ?>

    </body>
<html>