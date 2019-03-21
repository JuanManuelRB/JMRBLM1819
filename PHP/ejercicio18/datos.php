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
$email = trim(htmlspecialchars(strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));

$connect = mysqli_connect("localhost", "root", "", "cursophp") or die("Problemas en la conexion");
$registro = mysqli_query($connect, "SELECT * FROM alumnos WHERE mail like '$email'") or die("Problemas en la consulta: ".mysqli_error($connect));

if ($reg = mysqli_fetch_array($registro)){
    ?>

        <form action="actualizar.php" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control" id="idEmail" name="idEmail" aria-describedby="emailHelp" value=<?php echo $reg['idAlumno'];?>>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" value="<?php echo $reg['nombre'];?>">
            </div>
            <div class="form-group">
                <label for="mail">Email</label>
                <input type="text" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" placeholder="mail" value="<?php echo $reg['mail'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="curso">Curso</label>
                    <select name="curso" id="curso" class="form-control">
                        
                        <?php
                        
                        $regcursos = mysqli_query($connect, "SELECT * FROM cursos") or die('Error en la consulta: '.mysqli_error($connect));

                        while($regc = mysqli_fetch_array($regcursos)){
                            if($regc['idCurso'] == $reg['codigocurso']){
                                echo '<option value="' . $regc['idCurso'] . '" selected>' . $regc['nombreCurso'] . '</option>';
                            }else{
                                echo '<option value="' . $regc['idCurso'] . '">' . $regc['nombreCurso'] . '</option>';
                            }
                        }
                        
                        ?>
        </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>

    <?php
}else{
    print '<p>Email no encontrado</p>';
}

?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>