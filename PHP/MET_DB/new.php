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
include("SGBD.php");
/*
$fechaInicio = trim(htmlspecialchars( strip_tags($_REQUEST["fechainicio"]), ENT_QUOTES, "UTF-8"));
$fechaFin = trim(htmlspecialchars( strip_tags($_REQUEST["fechafin"]), ENT_QUOTES, "UTF-8"));
$medida = trim(htmlspecialchars( strip_tags($_REQUEST["medida"]), ENT_QUOTES, "UTF-8"));
$valor = trim(htmlspecialchars( strip_tags($_REQUEST["valor"]), ENT_QUOTES, "UTF-8"));
*/
$fechaInicio = '23/04/1998';
$fechaFin = '06/04/2019';
$medida = 'centigrados';
$valorInicio = -200;
$valorFin = 200;


if (isset($fechaInicio) && !empty($fechaInicio)){
    $FI=strtotime($fechaInicio);
}else{
    $FI=Select("min(Fecha_Hora)","medidas","");
}

if (isset($fechaFin) && !empty($fechaFin)){
    $FF=strtotime($fechaFin);
}else{
    $FF=Select("max(Fecha_Hora)","medidas","");
}
/*
SELECT m.Fecha_Hora,s.modelo,m.Valor,s.id,m.Sensores_id,m.Variables_Id 
                                            FROM medidas m inner join sensores s on m.Sensores_id = s.id 
                                            ORDER BY Fecha_Hora 
                                            LIMIT $inicio,6
*/

$campos = 'm.Fecha_Hora,s.modelo,m.Valor,s.id,m.Sensores_id,m.Variables_Id';
$tablas = 'medidas m inner join sensores s on m.Sensores_id = s.id';
$condicion = 'Fecha_Hora BETWEEN ' . $FI . ' and ' . $FF;
$order = 'Fecha_Hora';
$limite = '$inicio,6';

//Hay dos formas de consultar pero voy a dejar esta
SGBD::Select($campos,$tablas,$condicion,$order,$limite);



?>
</body>
</html>