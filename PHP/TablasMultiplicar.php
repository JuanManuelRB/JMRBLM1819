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
    
    $i=1;
    
    
    while ($i <= 10){
        $j=1;
        while ($j <= 10) {
            
            $res=($i * $j);
            $j++;

            
        }
        $i++;
    echo "<table><tr><td>" . $i . "</td><td></td></tr></table>"    
    }

    

    ?>

</body>
</html>