<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php 
            
            //$user_retail_card = true;
            $user_retail_card = false;
            $purchase_amount = 350;

            $freight_value = 50;
            $freight_discount = false;

            if($user_retail_card && $purchase_amount >= 99) {
                $freight_value = 0;
                $freight_discount = true;
            } else if ($user_retail_card || $purchase_amount >= 99) {
                $freight_value = $freight_value/2;
                $freight_discount = true;
            }

        ?>

        <h1>Detalhes do Pedido</h1>
        <p>Possui cartão da loja:
            <?php
                if($user_retail_card) {
                    echo ' SIM';
                } else {
                    echo ' NÃO';
                }
            ?>
        </p>

        <p>Valor da compra: <?= $purchase_amount?></p>
        <p>Desconto no frete: 
        <?php
                if($freight_discount) {
                    echo ' SIM';
                } else {
                    echo ' NÃO';
                }
            ?>
        </p>
        <p>Valor do frete: <?= $freight_value?></p>
        <p>Valor total: <?= $purchase_amount + $freight_value?></p>

    </body>
<html>