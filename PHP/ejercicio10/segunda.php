<?php

    $nombre = trim(htmlspecialchars( strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));

    session_start();
    $_SESSION['nombreWeb'] = $nombre;
    header('Location: tercera.php');

?>