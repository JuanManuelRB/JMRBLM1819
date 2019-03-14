<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Documento</title>
</head>
<body>
<!--Muestra una consulta de todos los productos de la tabla productos mostrando el nombre completo
    del proveedor del producto. Además, muestre un mensaje indicando el precio total de todos los productos y
    la cantidad de productos que tenemos en stock. Añade un botón para insertar un producto en la base de datos.
    Muestra en el formulario todos los proveedores que existen en la tabla de proveedores.-->
    <div class="container">
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "bdejemplo") or die("Error en la conexion con la base de datos");
    $registro = mysqli_query($conn, "SELECT prod.*, prov.nombre from productos as prod inner join proveedores as prov on prov.idProveedor = prod.idProveedor") or die("Error en la consulta");
    
    
    echo '<table class="table table-dark">';
    echo '<tr><th>ID Producto</th><th>Descripción</th><th>Cantidad</th><th>Precio</th><th>ID Proveedor</th><th>Nombre</th>';
        while($reg = mysqli_fetch_array($registro)) {
            echo '<tr>';
            echo "<td>" . $reg['idProductos'] . "</td>";
            echo "<td>" . $reg['descripcion'] . "</td>";
            echo "<td>" . $reg['cantidad'] . "</td>";
            echo "<td>" . $reg['precio'] . "</td>";
            echo "<td>" . $reg['idProveedor'] . "</td>";
            echo "<td>" . $reg['nombre'] . "</td>"; 
            echo '</tr>'; 
        }
    echo '</table>';
    
    $prec = 0;
    $cant = 0;
    $registrop = mysqli_query($conn, "SELECT precio FROM productos") or die("Error en la consulta 2");
    while($reg = mysqli_fetch_array($registrop)) {
        

    }
    $registroc = mysqli_query($conn, "SELECT cantidad FROM productos") or die("Error en la consulta 3");
    while($reg = mysqli_fetch_array($registroc)) {


    }

    echo $prec;
    echo $cant;

    echo "<p>Inserte en el siguiente formulario los valores en la base de datos</p>";
    ?>

    <form action="insertar.php" method="post">
    <div class="form-group">
        <label for="nombre">Nombre Alumno</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="curso">Curso</label>
        <select name="curso" id="curso" class="form-control">
            
        <?php
            /*
            $registro2 = mysqli_query($conn, "SELECT idProveedor, nombre FROM proveedores") or die("Problemas al obtener los datos. ".mysqli_error($conn));

            while($reg2 = mysqli_fetch_array($registro2)){
                echo '<option value="' . $reg2['idProveedor'] . '">' . $reg2['nombre'] . '</option>';
            */
        ?>
        </select>
    </div>
            
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>