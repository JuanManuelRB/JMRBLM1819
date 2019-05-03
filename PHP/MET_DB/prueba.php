<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap-->
<link rel="stylesheet" href="bootstrap\bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="bootstrap\jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="bootstrap\popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap\bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Calendario-->
<link href="calendario\bootstrap.min.css" rel="stylesheet">
<script src="calendario\bootstrap.min.js"></script>
<script type='text/javascript' src='calendario\jquery-1.8.3.js'></script>
<link rel="stylesheet" href="calendario\bootstrap-datepicker3.min.css">
<script type='text/javascript' src="calendario\bootstrap-datepicker.min.js"></script>
<script type='text/javascript'>
$(function(){
$('.input-daterange').datepicker({
    autoclose: true
});
});
</script>
<link href="calendario\bootstrap.css" rel="stylesheet"/>
<link href="calendario\bootstrap-datetimepicker.css" rel="stylesheet"/>
<script src="calendario\jquery.js"></script>
<script src="calendario\moment.min.js"></script>
<script src="calendario\bootstrap.js"></script>
<script src="calendario\bootstrap-datetimepicker.min.js"></script>
<!--Slider 2 valores-->
<link rel="stylesheet" href="slider\ion.rangeSlider2.min.css"/>
<script src="slider\jquery.min.js"></script>
<link rel="stylesheet" href="slider\ion.rangeSlider.min.css"/>
<script src="slider\ion.rangeSlider.min.js"></script>
<!--Boton Responsive-->
<!--Fin Boton Responsive-->
</head>
<!--Color oscuro  style="background-color:#212121"-->
<body style="background-color:#EAE9E9">
<?php
include("otro.php");

//$objBd=new AdaCnxBd("localhost","estacion","root","");
$objBd->conectarBD();

$objBd->queryBD("select * from sensores");

while($row=$objBd->obtenerResultado()){

printf("%s<br>",$row["nombreDelCampo"]);

}

$objBd->terminarConsulta();

$objBD->desconectarBD();

//Fin Consulta



//Inicio Refrescar pagina
if (
    (isset($_REQUEST['rango']))
    ||
    (isset($_REQUEST['fecha1']))
    ||
    (isset($_REQUEST['fecha2']))
    ||
    (isset($_REQUEST['UniMed'])))
    {
        list($rango1, $rango2)= explode(";",$_REQUEST['rango']);
    if(
    (!empty($_REQUEST['fecha1']))
    ||
    (!empty($_REQUEST['fecha2']))
    ||
    ($_REQUEST['UniMed'] != "0")
    ||
    ($rango1 != -200)
    ||
    ($rango2 != 200)
    ){
print "<div>";
print "<form action=''>";
print "<p><input style='width:100%;margin-top:20px' class='btn btn-primary' type='submit' value='Reestablecer'></p>";
print "</form>";
print "</div>";
}
}
?>
<!--Fin Refrescar pagina-->
</div>
<!--Fin Contenedor-->
</body>
</html>