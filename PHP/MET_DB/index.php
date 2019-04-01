<?php
    $fechaInicio = $_REQUEST['FI'];
    $fechaFin = $_REQUEST['FF'];
    $tipo = $_REQUEST['Tipo'];
    $valor = $_REQUEST['Valor'];

    if(!empty($fechaInicio)){}  
        if ($fechaInicio != "Default"){
            $value1 = date_format($fechaInicio, 'Y-m-d H:i');
        }else{
            $value1 = date_format(date('Y-m-d H:i'));
        }
    }

        if (!empty($fechaFin) && $fechaFin != "Default"){
            $value2 = date_format($fechaFin, 'Y-m-d H:i');
        }else{
            $value2 = date_format(mysqli_query($conn, "SELECT Fecha_Hora FROM medidas WHERE "), 'Y-m-d H:i');
        }
        
    

    $conn = mysqli_connect("localhost", "root", "", "weather_station") or die("Problema en la conexión");
    $reg = mysqli_query($conn, "SELECT limit ,5"
                        ) or die("Error en la consulta: ".mysqli_error($conn));
?>

        