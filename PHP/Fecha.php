<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--2. Mostramos los números de los días del 1 a la fecha actual. Ejemplo: si hoy es 11 debe mostrar los números del 1 al 11.-->
    <?php
    
    $dia=date("d");
    
    for ($i = 1; $i <= $dia; $i++) {
        echo $i;
        echo "<br/>"
    }
    ?>

</body>
</html>