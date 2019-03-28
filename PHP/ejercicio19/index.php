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
    if(isset($_REQUEST['posicion'])){
        $inicio = $_REQUEST['posicion'];
    }else{
        $inicio = 0;
    }
        $conn = mysqli_connect("localhost", "root", "", "cursophp") or die("Problema en la conexión");
        $reg = mysqli_query($conn, "SELECT idAlumno, nombre, mail, codigocurso, nombreCurso
                                        FROM alumnos as al
                                        inner join cursos as cu on al.codigocurso = cu.idCurso limit $inicio,2"
                            ) or die("Error en la consulta: ".mysqli_error($conn));
    
    $contador = 0;
    while($r = mysqli_fetch_array($reg)){
        echo '<p>Nombre: ' . $r['nombre'] . ' - Mail: ' . $r['mail'] . ' - Curso: ' . $r['nombreCurso'] . '</p>';
        $contador++;
    }

    if($inicio == 0){
        echo '<p>Anteriores</p>';
    }else{
        $anterior = $inicio - 2;
        echo '<a href="index.php?posicion=' . $anterior . '">Anteriores</a>';
    }

    if($contador == 0 or $contador > $r){
        echo '<p>Siguientes</p>';
    }else{
        if($contador % 2 != 0){
            $siguiente = $inicio + 1;
            echo '<a href="index.php?posicion=' . $siguiente . '"> - Siguientes</a>';
        }else{
            $siguiente = $inicio + 2;
            echo '<a href="index.php?posicion=' . $siguiente . '"> - Siguientes</a>';
        }
    }  

?>





</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>