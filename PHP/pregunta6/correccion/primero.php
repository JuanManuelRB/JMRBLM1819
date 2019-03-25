<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <?php 
    if(isset($_REQUEST["error"]) && ($_REQUEST["error"] == 1)){
        print '<p style="color: red;">Debe rellenar los campos</p>';
    }
    ?>
</div>

    <form action="segundo.php" method="post">
    <p>
    <label for="usuario">Usuario: </label>
    <input type="text" name="usuario" id="usuario" value="<?php
        if (isset($_COOKIE['usuarioWeb'])){
            echo $_COOKIE['usuarioWeb'];
        }?>"/>
    </p>
    <p>
    <label for="password">Contraseña: </label>
    <input type="password" name="password" id="password">
    </p>
    <p>
    <input type="submit" value="Enviar">
    </p>
    </form>
</body>
</html>