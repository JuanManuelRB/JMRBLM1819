<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:
<?php
if (isset($_COOKIE['color'])){
    if($_COOKIE['color'] === "r"){
        print 'red';
    }else if ($_COOKIE['color'] === "g"){
        print 'green';
    }else if ($_COOKIE['color'] === "b"){
        print 'blue';
    }    
}
?>
">

<form action="color.php" method="get">
    <label for="color">Selecciona un color </label>
    <select name="color" id="color">
        <option value=""></option>
        <option value="r">Rojo</option>
        <option value="g">Verde</option>
        <option value="b">Azul</option>
    </select>
    <p><input type="submit"></p>
</form>


</body>
</html>