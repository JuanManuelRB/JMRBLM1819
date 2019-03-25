<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!--3. Dado un vector de números positivos desordenado, recórralo y muestre los 3 números mayores.-->
    <?php
    
        $vec = [];
        for ($i=0; $i<10; $i++){

            $vec[$i]=rand(0,9);
        }

        $num[0] = $vec[0];
        $pos=0;
        for ($k=0; $k<3; $k++){
            for ($j=0; $j<=count($vec); $j++){
                
                if($j==$pos){

                    $j++;
                }

                if($num[$k]<$vec[$j]){
                    
                    $num[$k]=$vec[$j];
                    $pos=$j;
                }   
            }
            echo $num[$k]
        }
        
    ?>


</body>
</html>
