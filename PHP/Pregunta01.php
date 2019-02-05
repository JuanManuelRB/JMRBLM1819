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
    $number = rand(1, 10);
    

    if($number < 5){
        echo '<p style="color:red">El valor ' . $number . ' es menor a 5</p>';       
    }else if($number > 5){
        echo '<p style="color:blue">El valor ' . $number . ' es mayor a 5</p>';
    }else{
        echo '<p style="color:green">El valor ' . $number . ' es 5</p>';
    }

    ?>

    
</body>
</html>