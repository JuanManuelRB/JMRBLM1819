<?php
/*
Realice un formulario para solicitar una temperatura y un desplegable que indique que tipo de temperatura es,
con las opciones “Celsius” o “Fahrenheit”. Al pulsar el botón convertir convertirá la temperatura en la otra unidad.
Deben ser valores decimales, no puede ser inferior a -273,15 ºC o -459,67 ºF.
Para obtener el resultado despejar la siguiente fórmula “F - 32 = 1,8 * C”. Presentar el resultado con 2 decimales.
*/

$valor=trim(htmlspecialchars($_REQUEST['valor'], ENT_QUOTES, "UTF-8"));
$unidad=trim(htmlspecialchars($_REQUEST['unidad'], ENT_QUOTES, "UTF-8"));
$tem=0;
if(empty($valor)){
    print "<p>No hay ningun valor</p>";
}else if(is_numeric($valor)){
    if($unidad == 0){
        print "<p>Seleccione una unidad</p>";
    }else if($unidad == 1){
        if($valor < -273.15){
            print "<p>El valor no puede ser tan bajo</p>";
        }else{
            $tem=(1.8 * $valor + 32);
            print "<p>$valor ºC son $tem ºF</p>";
        }
    }else if($unidad == -1){
        if($valor < -459.67){
            print "<p>El valor no puede ser tan bajo</p>";
        }else{
            $tem=($valor - 32 / 1.8);
            print "<p>$valor ºF son $tem ºC</p>";
        }
    }
}


?>