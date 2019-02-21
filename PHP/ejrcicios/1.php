
<?php
//Realice un formulario que introduzca dos valores (pies y pulgadas) y los convierta a centímetros. Los pies deben ser un número entero mayor o igual que cero. Las pulgadas son un número entero o decimal mayor o igual que cero. Un pie son doce pulgadas y una pulgada son 2,54 cm.


$pies=trim(htmlspecialchars($_REQUEST['pies'], ENT_QUOTES, "UTF-8"));
$pulgadas=trim(htmlspecialchars($_REQUEST['pulgadas'], ENT_QUOTES, "UTF-8"));

define('UNAPULGADA', 2.54);

if(empty($pies)){
    print "<p>Campo pies vacio</p>";
}else if(filter_var($pulgadas, FILTER_VALIDATE_INT)){
    print "<p>Debe ser un numero</p>";
}else if($pies < 0){
    print "<p>Los pies deben ser mayores a cero</p>";
}else{
    $cm=(($pies*12 + $pulgadas)* UNAPULGADA);
    print "<p>$pies pies y $pulgadas pulgadas son $cm centimetros</p>";
}



    $cm=(($pies*12 + $pulgadas)* UNAPULGADA);
?>

