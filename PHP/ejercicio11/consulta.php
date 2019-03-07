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
    
        $connect = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas de conexión");

        $registros = mysqli_query($connect, "SELECT idAlumno, nombre, mail, codigocurso FROM alumnos") or die("Problemas en la consulta: ".mysqli_error($connect));

        while($reg = mysqli_fetch_array($registros)){
            echo "<p>Id de Alumno: " . $reg['idAlumno'] . "</p>";
            echo "<p>Nombre: " . $reg['nombre'] . "</p>";
            echo "<p>Email: " . $reg['mail'] . "</p>";
            echo "<p>Codigo de Curso: " . $reg['codigocurso'] . "</p>";
        }

        mysqli_close($connect);

    ?>
</body>
</html>