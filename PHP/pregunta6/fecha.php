<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$fecha_actual = strtotime(date("d-m-Y"));
$fecha = strtotime($_REQUEST['date']);
$fechaf = $fecha_actual - $fecha;

echo "Tu edad es " . floor(($fechaf/60/60/24/365)) . " años";
?>

<a href="index.php">Volver</a>
</body>
</html>

