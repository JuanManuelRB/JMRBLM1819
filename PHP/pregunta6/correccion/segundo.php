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
    $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
    if(!empty($referer)){
        echo "<a href='$referer'>Volver</a>"
    }else{
        echo "<a href='javascript:history.go(-1)'>Volver</a>"
    }


    $usuario = trim(htmlspecialchars(strip_tags($_REQUEST["usuario"]), ENT_QUOTES, "UTF-8"));
    $password = trim(htmlspecialchars(strip_tags($_REQUEST["password"]), ENT_QUOTES, "UTF-8"));

    if (empty($usuario) || empty($password)) {
        header('location: primero.php?error=1');
    
    }else if($password != "1234"){
        header('location: primero.php?error=2');
    }else{
        setcookie("usuarioWeb", $usuario, time()+60*60*60);
        
    }

    session_start();
    $_SESSION['nombreUsuario'] = $usuario;
    ?>
    <div style="margin: 0 auto; with= 300px;">
        <form action="tercero.php" method="get">
        <p>
            <label for="edad">Edad: </label>
            <input type="date" name="edad" id="edad">
        </p>
        <p>
            <input type="submit" value="enviar">
        </p>
        </form>
    </div>
</body>
</html>