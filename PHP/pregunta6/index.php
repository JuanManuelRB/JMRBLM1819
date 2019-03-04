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
    if(isset($_COOKIE['error']) && $_COOKIE['error'] == 1){
        echo '<p>Usuario o contraseña incorrecto</p>';
    }else if(isset($_COOKIE['error']) && $_COOKIE['error'] == 0){
        echo '
        <form action="fecha.php" method="get">
        <label for="date">Introduce tu fecha de cumpleaños: </label><input type="date" name="date" id="date">
        <input type="submit">
        </form>
        ';
    }else{
        echo '
            <form action="main.php" method="get">
            <label for="usr">Usuario: </label><input type="text" name="usr" id="usr"
        ';

            if(isset($_COOKIE['usuario'])){
                print  'value="' . $_COOKIE['usuario'] . '">';
                
            }else{
                print '>';
                }
        echo '
            <label for="pass">Contraseña: </label><input type="password" name="pass" id="pass">
            
            <input type="submit">
            </form>
        ';
    }    
    ?>


</body>
</html>