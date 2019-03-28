<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="display: inline"></div>    

<!--1. Desarrolle un ejercicio que muestre las tablas de multiplicar -->
    <?php    
    $i=1;
    $j=1;
    while ($i < 10){
        echo '<div style="display: inline; float: left;">'
        while ($j < 10){
            $res=($i * $j)
            echo "<pre>" . $j . " x " . $i . " = " . $res . "</pre><br/>"
            $j++;
        echo "</div>"
        }
        $i++;
    }
    ?>

</body>
</html>
