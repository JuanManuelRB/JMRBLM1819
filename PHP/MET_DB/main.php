<?php
    $fechaInicio = $_REQUEST['FI'];
    $fechaFin = $_REQUEST['FF'];
    $unidad = $_REQUEST['Unidad_Medida'];
    $valor = $_REQUEST['Valor'];

    https://programacion.net/codigo/consultar_bd_mysql_utilizando_poo_135


        if (isset($fechaInicio) && !empty($fechaInicio)){
            $FF=strtotime($fechaInicio);
        }else{
            $FF=NULL;
        }

        if (isset($fechaFin) && !empty($fechaFin)){
            $FI=strtotime($fechaFin);
        }else{
            $FI=NULL;
        }

        between ($fechaI, $fechaF){
            if($fechaI & $fechaF){
                $where = 
            }else if($fechaI){
                
            }else{
                
            }
          }


        
        date("Y-m-d H:i", $FI);
        
        date("Y-m-d H:i", $FI);


       

    request ($fechaInicio, ) {
        this.$fechaInicio = strtotime();
        private $fechaFin = $_REQUEST['FF'];
        private $unidad = $_REQUEST['Unidad_Medida'];
        private $valor = $_REQUEST['Valor'];
        }
        
    

    $conn = mysqli_connect("localhost", "root", "", "weather_station") or die("Problema en la conexión");
    $reg = mysqli_query($conn, "SELECT limit ,5"
                        ) or die("Error en la consulta: ".mysqli_error($conn));
?>

        