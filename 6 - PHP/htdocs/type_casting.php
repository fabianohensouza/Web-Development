<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            // Int/Bool/Float/String

            $value1 = 93;
            $value2 = 'valor';
            $value3 = 5.7;
            $value4 = true;

            //Consulting the variable type
            $type1 = gettype($value1);
            $type2 = gettype($value2);
            $type3 = gettype($value3);
            $type4 = gettype($value4);

            echo "A variável $value1 é do tipo $type1!</br>";
            echo "A variável $value2 é do tipo $type2!</br>";
            echo "A variável $value3 é do tipo $type3!</br>";
            echo "A variável $value4 é do tipo $type4!</br><hr>";

            //Int to Float/string
            $int_to_float = (float) $value1;
            $int_to_string = (string) $value1;

            $type5 = gettype($int_to_float);
            $type6 = gettype($int_to_string);

            echo "A variável $int_to_float é do tipo $type5!</br>";
            echo "A variável $int_to_string é do tipo $type6!</br><hr>";

            //String to Int/Boolean
            $string_to_int = (integer) $value2;
            $string_to_boolean = (boolean) $value2;
            $string_to_float = (float) $value2;

            $type7 = gettype($string_to_int);
            $type8 = gettype($string_to_boolean);
            $type13 = gettype($string_to_float);

            echo "A variável $string_to_int é do tipo $type7!</br>";
            echo "A variável $string_to_boolean é do tipo $type8!</br>";
            echo "A variável $string_to_float é do tipo $type13!</br><hr>";

            //Float to Int/Boolean
            $float_to_int = (integer) $value3;
            $float_to_boolean = (boolean) $value3;

            $type9 = gettype($float_to_int);
            $type10 = gettype($float_to_boolean);

            echo "A variável $float_to_int é do tipo $type9!</br>";
            echo "A variável $float_to_boolean é do tipo $type10!</br><hr>";

            //Boolean to Int/string
            $bool_to_int = (integer) $value4;
            $bool_to_string = (string) $value4;

            $type11 = gettype($bool_to_int);
            $type12 = gettype($bool_to_string);

            echo "A variável $bool_to_int é do tipo $type11!</br>";
            echo "A variável $bool_to_string é do tipo $type12!</br><hr>";
            

        ?>

    </body>
<html>