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
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="FI">Fecha Inicio</label>
            <input type="date" class="form-control" id="FI" name="FI" placeholder="Ingresa una fecha">
        </div>
        <div class="form-group">
            <label for="FF">Fecha Fin</label>
            <input type="date" class="form-control" id="FF" name="FF" placeholder="Ingresa una fecha">
        </div>
        <div class="form-group">
                <label for="Tipo">Tipo</label>
                <select class="form-control" id="Tipo" name="Tipo">
                    <option value="">Tipo 1</option>
                    <option value="">Tipo 2</option>
                    <option value="">Tipo 3</option>
                    <option value="">Tipo 4</option>
                    <option value="">Tipo 5</option>
                </select>
        </div>
        <div class="form-group">
            <label for="Valor">Valor</label>
            <input type="date" class="form-control" id="Valor" name="Valor">
        </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    </div>

    <div>
        <table>

        <?php
            $fechaInicio = $_REQUEST['FI'];
            $fechaFin = $_REQUEST['FF'];
            $tipo = $_REQUEST['Tipo'];
            $valor = $_REQUEST['Valor'];

            function consulta($inicio, $fin, $tipo, $valor){
                $a = toString($inicio) + toString($fin)
                return 
            }

            $conn = mysqli_connect("localhost", "root", "", "estacion") or die("Problema en la conexión");
            $reg = mysqli_query($conn, "SELECT limit ,5"
                                ) or die("Error en la consulta: ".mysqli_error($conn));
        ?>

        </table>
    </div>

    <form action="1.php" method="get">
        
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>