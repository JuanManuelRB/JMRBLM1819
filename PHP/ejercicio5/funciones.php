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

    function calculaHipotenusa($c1, $c2){
        $hipo = sqrt($c1*$c1 + $c2*$c2);
        return $hipo;
    }

    function imprimir(){
        print "Hola";

    }

    $cat1 = 12;
    $cat2 = 16;
    $hipotenusa = calculaHipotenusa($cat1, $cat2);

    echo $hipotenusa;
    imprimir();

?>


</body>
</html>