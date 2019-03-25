<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Consulta Join</title>
</head>
<body>

<div class="container">

    <?php
    
        $conection = mysqli_connect("localhost", "root", "", "cursophp") or die("Error de conexion a la base de datos");

        $registros = mysqli_query($conection, "SELECT alu.idAlumno, alu.nombre, alu.mail, cur.nombreCurso from alumnos as alu inner join cursos as cur on alu.codigocurso = cur.idCurso") or die("Error en:".mysqli_error($conection));
    
    echo '<table class="table table-dark">';
    echo '<tr><th>Codigo</th><th>Nombre</th><th>Email</th><th>Curso</th>';
        while($reg = mysqli_fetch_array($registros)) {
            echo '<tr>';
            echo "<td>" . $reg['idAlumno'] . "</td>";
            echo "<td>" . $reg['nombre'] . "</td>";
            echo "<td>" . $reg['mail'] . "</td>";
            echo "<td>" . $reg['nombreCurso'] . "</td>";
            echo '</tr>';
        }
    echo '</table>';
        mysqli_close($conection);
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>