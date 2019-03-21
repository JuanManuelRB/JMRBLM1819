<?php

    $base = trim(htmlspecialchars( strip_tags($_REQUEST["base"]), ENT_QUOTES, "UTF-8"));
    $altura = trim(htmlspecialchars( strip_tags($_REQUEST["altura"]), ENT_QUOTES, "UTF-8"));
    $tipo = trim(htmlspecialchars( strip_tags($_REQUEST["tipo"]), ENT_QUOTES, "UTF-8"));

    if(!empty($base) && !empty($altura)){
        if (isset($tipo)){
            if($tipo == 2){
                //Area
                $res = 2*($base + $altura);
                echo "<p>El área es: " . $res . "</p>";
            }else if($tipo == 1){
                //Perimetro
                $res = ($base * $altura);
                echo "<p>El perimetro es: " . $res . "</p>";
            }
        }
    }else{
        echo "<p>Debe introducir la base y la altura</p>";
        echo '<p><a href="1.html">Volver al formulario</a></p>';
    }
?>