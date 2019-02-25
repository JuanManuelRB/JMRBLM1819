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

if(isset($_COOKIE['email'])){
    print '
    <form action="almacenar.php" method="get">
        <p><label for="email">Escriba su email: </label><input type="email" name="email" id="email" value="' . $_COOKIE['email'] . '"></p>
        <p><label for="passwd">Escriba su contraseña: </label><input type="password" name="passwd" id="passwd"></p>
        <p><label for="recordar">¿Recordar email? </label><input type="checkbox" name="recordar" id="recordar"></p>
        <p><input type="submit"></p>
    </form>
    ';
}else{
    print '
    <form action="almacenar.php" method="get">
        <p><label for="email">Escriba su email: </label><input type="email" name="email" id="email"></p>
        <p><label for="passwd">Escriba su contraseña: </label><input type="password" name="passwd" id="passwd"></p>
        <p><label for="recordar">¿Recordar email? </label><input type="checkbox" name="recordar" id="recordar"></p>
        <p><input type="submit"></p>
    </form>
    ';
}
    ?>

    

</body>
</html>