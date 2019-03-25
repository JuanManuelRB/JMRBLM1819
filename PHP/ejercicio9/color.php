<?php
if (isset($_REQUEST["color"])){
    $color = $_REQUEST["color"];
    setcookie("color", $color, time()+60*60);
}
header('Location: fondo.php');
?>