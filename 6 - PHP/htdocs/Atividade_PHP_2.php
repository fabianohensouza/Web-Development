<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            function calculateIncomeTax($wage) {
                
                if ($wage <= 1903.98) {
                    $aliquot = 0;
                } else if ($wage <= 2826.65) {
                    $aliquot = 7.5;
                } else if ($wage <= 3751.05) {
                    $aliquot = 15;
                } else if ($wage <= 4664.68) {
                    $aliquot = 22.5;
                } else if ($wage > 4664.68) {
                    $aliquot = 27.5;
                }

                return ($wage * $aliquot) / 100;
            }

            $gross_wage = 4500.00;
            $income_tax = calculateIncomeTax($gross_wage);
            $liquid_wage = $gross_wage - $income_tax;

            echo "Salário bruto: R$$gross_wage.</br>";
            echo "Imposto de renda: R$$income_tax.</br>";
            echo "Salário líquido: R$$liquid_wage.</br>";
        ?>

    </body>
<html>