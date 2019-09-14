<?php

//Creating a excoption class customizes
class MyCustomizedException extends Exception {
    private $error = '';

    public function __construct($error) {
        $this->error = 'Registrando Log:  ' . $error;
    }

    public function showCustomizedErrorMessage() {
        echo '<div style="border: solid 1px black;">';
            echo $this->error;
        echo '</div>';
    }
}

try {
    echo '<h3>*** Try ***</h3>';
    throw new MyCustomizedException('Este é um erro de teste!');

} catch(MyCustomizedException $error) {
    echo '<h3>*** Catch ***</h3>';
    //echo '<p style="color: red">' . $error->showCustomizedErrorMessage() . '</p>';
    $error->showCustomizedErrorMessage();

}

?>