<?php

$email = trim(htmlspecialchars( strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));
$passwd = trim(htmlspecialchars( strip_tags($_REQUEST["passwd"]), ENT_QUOTES, "UTF-8"));


if (isset($_REQUEST["recordar"])){
    setcookie("email", $email, time()+60*60);
}else{
    setcookie("email", $email, -1000;
}

print '<p><a href="login.php">Ir a login</a></p>';



?>