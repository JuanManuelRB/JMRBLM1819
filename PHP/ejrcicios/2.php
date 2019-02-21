<?php
//Escriba un formulario para introducir 3 números (entre 0 y 100). Debe indicar si son iguales, si hay dos iguales o si los tres son distintos.

$n1=trim(htmlspecialchars($_REQUEST['primer'], ENT_QUOTES, "UTF-8"));
$n2=trim(htmlspecialchars($_REQUEST['segundo'], ENT_QUOTES, "UTF-8"));
$n3=trim(htmlspecialchars($_REQUEST['tercer'], ENT_QUOTES, "UTF-8"));

if(!($n1 >= 0) || !($n1 <= 100) || (empty($n1)) || !(is_numeric($n1))){
    print "<p>Error en el numero 1</p>";
}else if(!($n2 >= 0) || !($n2 <= 100) || (empty($n2)) || !(is_numeric($n2))){
    print "<p>Error en el numero 2</p>";
}else if(!($n3 >= 0) || !($n3 <= 100) || (empty($n3)) || !(is_numeric($n3))){
    print "<p>Error en el numero 3</p>";
}else{
    if($n1 == $n2 && $n2==$n3){
        print "<p>Los tres numeros son iguales</p>";
    }else if($n1==$n2 || $n2==$n3 || $n1==$n3){
        print "<p>Hay dos numeros iguales</p>";
    }else{
        print "<p>Los numeros son diferentes</p>";
    }
}

?>