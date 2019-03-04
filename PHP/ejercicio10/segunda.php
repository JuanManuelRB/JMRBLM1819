<?php

    if(isset($_SESSION['nombreWeb'])){

    }else{
        $_SESSION['nombreWeb'] = $nombre;
    }
    

    $nombre = trim(htmlspecialchars( strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

    session_start();
    
    header('Location: tercera.php');

?>