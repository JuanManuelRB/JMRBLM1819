<?php
$usuario = trim(htmlspecialchars(strip_tags($_REQUEST["usr"]), ENT_QUOTES, "UTF-8"));
$password = trim(htmlspecialchars(strip_tags($_REQUEST["pass"]), ENT_QUOTES, "UTF-8"));
$error = 0;
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario'] === $usuario && $_SESSION['password'] === $password){
        $error = 0;
        setcookie("error", $error, time()+1);
        header('Location: index.php');
    }else{
        $error = 1;
        setcookie("error", $error, time()+1);
        header('Location: index.php');
    }
}else{
    $_SESSION['usuario'] = $usuario;
    $_SESSION['password'] = $password;
    setcookie("usuario", $usuario, time()+60*60*60);
    header('Location: index.php');
}
?>