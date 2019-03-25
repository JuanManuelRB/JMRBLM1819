<?php
$tabla=trim(htmlspecialchars($_REQUEST['tabla'], ENT_QUOTES, "UTF-8"));
if(empty($tabla)){
    print "<p>El campo esta vacio</p>";
}else if(!filter_var($tabla, FILTER_VALIDATE_INT)){
    print "<p>El campo debe ser un numero entero</p>";
}else{
    if($tabla > 0 && $tabla <= 100){
        print "<div>";
        for($i=1; $i <= 10; $i++){
            $resultado = ($i * $tabla);
            print "<p>$i x $tabla = $resultado</p>";
        }
        print "</div>";
    }else{
        print "<p>El valor debe estar entre 0 y 100</p>";
    }
}
?>