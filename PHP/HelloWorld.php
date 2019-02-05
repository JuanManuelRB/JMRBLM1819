<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hola";
        echo "<b>Hola</b> a todos";
        print "<p>Hola</p>\n";

        $saludo = "Holaaa";
        echo "<b>Mensaje: </b>" . $saludo . "<b>. Fin Mensaje</b>";
    ?>
    <?= $saludo ?>
    <?php
        $a = 8;
        $b = 2;
        $c = 2;
        echo $a + $b, "<br/>";
        $resultado = $a - $b;

        echo $a == $b, "<br/>";

        echo ($a == $b) && ($c > $b), "<br/>";

        $perimetro = 2*3.14*15;
        print 2 * $perimetro;

        $tabla = ["valor1" , "valor2"];
        echo $tabla[0];

        $tabla2 = [["msg1" , "msg2"], ["msg3","msg4"]];
        echo $tabla2[0][1];

        $coreccto = true;
        if ($coreccto){print "<p>Es coreccto</p>"};

        $texto = "Este texto";
        $texto[0] = "e";
        echo $texto;

        $texto[15] = "F";
        print $texto;

        $tabla3 = ["Hola", 2019];
        print $tabla3[0] . " - " . $tabla3[1];
        
        //Añadir valor a array
        $tabla3[] = "Fin";
        print $tabla3[2];

        //Borrar valor  de array
        //unset($tabla3[2]);
        print $tabla3[2];

        //unset($tabla3);
        print $tabla3[0];

        echo count($tabla3);

        $numeros = [10, 5, 15, 11];
        echo max($numeros);
        echo min($numeros);
        sort($numeros);
        print_r($numeros);

        if(in_array(15, $numeros)){print "Está el 15";}else{print "No está el 15";}

        array_search(15, $numeros);

        $encontrados = array_keys($numeros, 15);
        print_r($encontrados);


        print "\n";

        shuffle($numeros);
        print_r($numeros);

        echo $numeros[array_rand($numeros)];

        define("PI", 3.1416);
        print "<p>El valor de PI es" . PI . "</p>";


        print "<pre>";
        print_r(get_defined_constants);
        print "</pre>";

        $maximo = PHP_INT_MAX;
        echo $maximo;
        




    ?>


</body>
</html>