<?php

    require "./libs/lib1/lib1.php";
    require "./libs/lib2/lib2.php";

    //Using alias to solve name conflicts questions
    use A\Client as Client_A;
    use B\Client as Client_B;

    $client1 = new Client_B();
    echo '<pre>';
    print_r($client1);
    echo '</pre>';
    echo $client1->__get('name');
    echo '<hr><hr>';

    $client2 = new Client_A();
    echo '<pre>';
    print_r($client2);
    echo '</pre>';
    echo $client2->__get('name');
    echo '<hr><hr>';

?>