<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">

<?php

session_start();
$nombre = $_SESSION['nombre'];
$peso = trim(htmlspecialchars(strip_tags($_REQUEST["peso"]), ENT_QUOTES, "UTF-8"));
$altura = (trim(htmlspecialchars(strip_tags($_REQUEST["altura"]), ENT_QUOTES, "UTF-8"))) / 100;


if(!empty($peso) && !empty($altura)){
    $IMC = ($peso / ($altura * $altura));
        if($IMC < 18.5){
            $imc = "Bajo peso";
        }else if($IMC >= 18.5 && $IMC <= 24.9){
            $imc = "Peso normal";
        }else if($IMC >= 25 && $IMC <= 29.9){
            $imc = "Sobrepeso";
        }else{
            $imc = "Obesidad";
        }

        echo '<p>' . $nombre . ', tu IMC (Indice de Masa Corporal) es: ' . $IMC . 'KG/m<sup>2</sup></p>';
        echo "<p>Tienes " . $imc . "</p>";
    
}else{
    echo "Debes introducir el peso y la altura";
    echo '<p><a href="2.php">Volver atras</a></p>';
}

?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>