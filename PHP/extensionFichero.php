<?php

//Introducir archivo y devolver extension en mayuscula


function extFile($arch){
$archLenght = strlen($arch);
$p=".";
    for ($i = 0; $i < $archLenght; $i++) {
        if(strcmp($arch[$i], $p) == 0){
            return strtoupper(substr($arch, ($i + 1) ));
        }

    }

}

function calcExt($fich){
    $nombreExt = explode(".", $fich);
    return strtoupper($nombreExt[1]);
}

$archivo = "Hola.txt";
$extension = extFile($archivo);
$exten = calcExt($archivo);
echo $extension . " " . $exten;
?>