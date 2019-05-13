<?php

    $fechaInicio = trim(htmlspecialchars( strip_tags($_REQUEST["fechainicio"]), ENT_QUOTES, "UTF-8"));
    $fechaFin = trim(htmlspecialchars( strip_tags($_REQUEST["fechafin"]), ENT_QUOTES, "UTF-8"));
    $medida = trim(htmlspecialchars( strip_tags($_REQUEST["medida"]), ENT_QUOTES, "UTF-8"));
    $valor = trim(htmlspecialchars( strip_tags($_REQUEST["valor"]), ENT_QUOTES, "UTF-8"));

include("SGBD.php");

if ($medida == "Centigrados"){
    
}else if($medida == "RPM"){

}else if($medida == "CLS"){

}else{

}
//m.Fecha_Hora,s.modelo,m.Valor,s.id,m.Sensores_id,m.Variables_Id



/*

funcion($inicio){

    $registros = mysqli_query($conn, 'SELECT m.Fecha_Hora,s.modelo,m.Valor,s.id,m.Sensores_id,m.Variables_Id 
                                            FROM medidas m inner join sensores s on m.Sensores_id = s.id 
                                            ORDER BY Fecha_Hora 
                                            LIMIT $inicio,6') 
    or die("Problemas en el select ".mysqli_error($conn));  
}               
*/                   
                        
                       
?>
<?php
//Ejemplo en una pagina cualquiera.

    /*
    <?php

    include("AdaCnxBd.php");

    $objBd=new AdaCnxBd("localhost","MyBD","MyLogin","MyPass");

    $objBd->conectarBD();

    $objBd->consultarBD("select * from MyTable");

    while($row=$objBd->obtenerResultado()){

    printf("%s<br>",$row["nombreDelCampo"]);

    }

    $objBd->terminarConsulta();

    $objBD->desconectarBD();
*/
?>

    


