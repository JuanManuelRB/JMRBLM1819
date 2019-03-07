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
    
    list($year, $month, $day) = explode("-", $_REQUEST['edad']);
    $year_diff = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff = date("d") - $day;
    if($month_diff < 0 || ($month_diff = 0 && $day_diff < 0)){
        $year_diff--;
    }

    session_start();
    print "<p>Bienvenido $_SESSION[nombreUsuario]</p>";
    print "<p>Su edad es $year_diff</p>";
    
    ?>
</body>
</html>