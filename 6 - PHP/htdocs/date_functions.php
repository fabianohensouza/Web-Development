<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            function convertDateBRtoUS($date) {
                
                $length = strlen($date) - 1;
                $aux_var = str_split($date);
                $date = str_split($date);

                if ( $length == 9) {
                    //$aux_var = array();
                    for($i=0; $i<$length; $i++) 
                        $aux_var[$i] = $date[$length - $i];

                    echo $aux_var;
                    return $aux_var;
                } else {
                    echo 'Data Invalida';
                }
            }

            function convertToInteger($value) {
                
                return (integer) $value;
            }

            //Recovering date data
            $day = date('d');
            $month = date('m');
            $year = date('Y');
            echo "A data atual é: $day/$month/$year</br>";
            echo 'A data e horas atuais são : ' . date('D - d/m/Y H:i') . '</br><hr>';

            //Get and changing the Timezone
            $timezone = 'America/Sao_Paulo';
            echo 'O timezone atual é : ' . date_default_timezone_get() . '</br></br>';
            echo "Alterando o timezone para $timezone</br></br>";
            date_default_timezone_set($timezone);
            echo 'O novo timezone é : ' . date_default_timezone_get() . ' - O horario oficial é : ' . date('H:i') . '</br><hr>';

            $initial_date = date('d-m-Y');
            $final_date = '2020-05-16';
            //$initial_date = convertDateBRtoUS('31-03-1987'); //Call function to convert to american format - YYYY/mm/dd
            //$final_date = convertDateBRtoUS('20-05-2020');

            //Calculating the timestamp - Seconds since 1970
            $initial_time = strtotime($initial_date);
            $final_time = strtotime($final_date);
            $result = $final_time - $initial_time; 
            $months = convertToInteger($result / 2592000);
            $days = convertToInteger(($result % 2592000) / 86400);
            $hours = convertToInteger(($result % 86400) / 3600);
            $minutes = ($result % 3600) / 60;
    
            echo "Faltam $months meses, $days dias, $hours horas e $minutes para o casamento.";  

        ?>

    </body>
<html>