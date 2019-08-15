<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            $option = 4;

            switch ($option) {
                
                case 1:
                    echo 'Opção 1</br>';
                    break;
                
                case 2:
                    echo 'Opção 2</br>';
                    break;
                
                case 3:
                    echo 'Opção 3</br>';
                    break;

                case 4:
                    echo 'Opção 4</br>';
                    break;
                
                default:
                    echo 'Opção default</br>';
                    break;
            }

            $num1 = 4;
            $num2 = 4;

            switch ($num1 - $num2) {
                
                case 0:
                    echo "$num1 é igual a $num2";
                    break;
                
                default:
                    echo "$num1 é diferente de $num2";
                    break;
            }
        ?>

    </body>
<html>