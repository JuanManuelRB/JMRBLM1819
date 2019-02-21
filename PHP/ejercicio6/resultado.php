<?php

$nombre = trim(htmlspecialchars( strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

if($nombre != ""){
    print "<p>Su nombre es $nombre</p>";
}

if(isset($_REQUEST["opcion"])){
    print "<p>Opcion marcada</p>";
}


print_r($_REQUEST);
print_r($_FILES);

?>