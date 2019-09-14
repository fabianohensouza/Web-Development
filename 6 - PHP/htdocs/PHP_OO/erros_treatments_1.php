<?php

try {
    echo '<h3>*** Try ***</h3>';

    $sql = 'slect * from clients';
    mysql_query($sql); //Returns error becouse the db isn't configured

} catch(Error $error) {
    echo '<h3>*** Catch ***</h3>';
    echo '<p style="color: red">Erro: ' . $error . '</p>';

} finally {
    //With Try and Catch the Finally is optional
    echo '<h3>*** Finally ***</h3>';
}

echo '<hr>';

try {
    echo '<h3>*** Try ***</h3>';

    if (!file_exists('test_file.txt')) {
        throw new Exception('O arquivo não existe!');
    }

} catch(Error $error) { //Catching the error
    echo '<h3>*** Catch ***</h3>';
    echo '<p style="color: red">Erro: ' . $error . '</p>';

} catch(Exception $error) { //Catching the exception
    echo '<h3>*** Catched Throw Exception ***</h3>';
    echo '<p style="color: blue">Erro: ' . $error . '</p>';

} finally {
    //With Try and Catch the Finally is optional
    echo '<h3>*** Finally ***</h3>';
}

echo '<hr>';

try {
    echo '<h3>*** Try ***</h3>';

    if (!file_exists('test_file.txt')) {
        throw new Error('O arquivo não existe!');
    }

} catch(Error $error) { //Catching the error
    echo '<h3>*** Catch Throw Error ***</h3>';
    echo '<p style="color: green">Erro: ' . $error . '</p>';

} catch(Exception $error) { //Catching the exception
    echo '<h3>*** Catched Throw Exception ***</h3>';
    echo '<p style="color: blue">Erro: ' . $error . '</p>';

} finally {
    //With Try and Catch the Finally is optional
    echo '<h3>*** Finally ***</h3>';
}

?>