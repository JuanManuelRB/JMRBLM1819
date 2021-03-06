<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Slider-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--Calendario-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script type='text/javascript'>
$(function(){
$('.input-daterange').datepicker({
    autoclose: true
});
});
</script>
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!--Slider 2 valores-->
<!--CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
<!--JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
<!--Fin slider-->
<!--Boton Responsive-->
<style>
#buscar{
    height: 180px;
    width:270%;
    Margin-left:20px;
}
@media only screen and (max-width: 992px) {
    #buscar {
        width:255%;
    }
}
@media only screen and (max-width: 767px) {
    #buscar {
        width:100%;
        height:60px;
        padding-left:0px;
        padding-right: 0px;
        margin-bottom:45px;
        Margin-left:0px;
        }
    .divbuscar{
    top:0px;
}
}
@media only screen and (max-width: 658px) {
    #UsuarioA{
        display:none;
    }
    #PassA{
        display:none;
    }
    #fi{
        display:none;
    }
    #fr{
        display:none;
    }
}

</style>
<!--Fin Boton Responsive-->
</head>
<!--Color oscuro  style="background-color:#212121"-->
<body>
<!--Contenedor-->
<div class="container"  style="padding-top:60px">
<!--Cabecera-->
<div style="position:absolute;left:0px;top:0px;z-index:100;background-color: #577284;width: 100%;height:54px;border-radius:0px 0px 30px 30px">
<form action="" method="post">
<a href="#" class="btn btn-info" role="button" style="margin-left:5%;margin-top:10px;margin-bottom:10px;height:32px">Estadísticas</a>
<div style="float:right;margin-right:5%">
<input type="text" id="UsuarioA" placeholder="Usuario" style="margin-top:10px;margin-bottom:10px;height:32px;border-radius:5px 5px 5px 5px">
<input type="password" id="PassA" placeholder="Contraseña" style="margin-top:10px;margin-bottom:10px;height:32px;border-radius:5px 5px 5px 5px">
<a href="#" class="btn btn-warning" role="button" style="margin-top:10px;margin-bottom:10px;height:32px">Administración</a>
</div>
</form>
</div>
<!--Fin Cabecera-->
<!--Formulario-->
<!--Inicio Grupo de formularios-->
<div class="form-group">
<!--Inicio columna de formularios-->
<div class="form-row">
<div class="col-md-9">
<form action="Principal.php" method="post">
<!--Filtro Calendario-->
<span>Fecha del registro</span>
<div class="input-daterange input-group form-group" id="datepicker">
<!--Filtro Calendario1-->
<input type="text" id="datetimepicker1" class="input-sm form-control" name="fecha1" placeholder="Fecha de inicio"/>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
<!--Etiqueta-->
<span class="input-group-addon" style="width:60px">Hasta</span>
<!--Filtro Calendario2-->
<input type="text" id="datetimepicker2" class="input-sm form-control" style="border-radius:0px 3px 3px 0px" name="fecha2" placeholder="Fecha final"/>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker();
    });
</script>
</div>
<!--Fin Filtro Calendario-->
<!--Filtro Medida-->
<div class="form-group">
<span>Tipo de medida: </span>
<select class="form-control" type="text" name="UniMed" id="UniMed">
<option value="0"></option>
<option value="ºC">ºC</option>
<option value="RPM">RPM</option>
<option value="CLS">CLS</option>
</select>
</div>
<!--Fin Filtro Medida-->
<!--Inicio seleccionar 2 valores-->
<div class="form-group">
<input type="text" class="js-range-slider" name="rango" value=""
        data-type="double"
        data-min="-200"
        data-max="200"
        data-from="-200"
        data-to="200"
        data-grid="true"
        data-skin="round"
        data-decorate-both="false"
    />
<script>$(".js-range-slider").ionRangeSlider();</script>
</div>
<!--Fin seleccionar 2 valores-->
<!--Boton buscar-->
</div>
<div class="form-group col-md-1" style="position:relative;top:20px;margin-bottom:0px;padding-left: 0px;padding-right: 0px;margin-left: 0px;margin-right: 0px">
<input id="buscar" class="btn btn-primary" type="submit" value="buscar">
</div>
<!--Fin Boton buscar-->
</div>
<!--Fin columna de formularios-->
</div>
<!--Fin Grupo de formularios-->
</form>
<!--Fin formulario-->
<!--Inicio Consulta-->
    <?php
    if(isset($_REQUEST['posicion'])){
        $inicio = $_REQUEST['posicion'];
    } else {
        $inicio = 0;
    }
print "<div style='width:100%;height:fit-content'>";
    //Boton de anterior
print "<div id='fi' style='float:left;width:8%;height:8%;margin-top:100px'>";
    if($inicio == 0){
        print "<img src='flecha-i.png' style='width:100%;height:100%'></img>";
    } else {
        $anterior = $inicio-6;
        print "<a href='Principal.php?posicion=$anterior'><img src='flecha-i.png'style='width:100%;height:100%'></img></a>";
    }
print "</div>";
print "<div style='width:83.7%;float:left;margin-left:1px;margin-right:1px'>";
    $conexion=mysqli_connect("localhost", "root", "", "estacion") or die("Problemas de conexión.");
    $registros = mysqli_query($conexion, "SELECT m.Fecha_Hora,s.modelo,m.Valor,s.id,m.Sensores_id,m.Variables_Id FROM medidas m inner join sensores s on m.Sensores_id = s.id ORDER BY Fecha_Hora LIMIT $inicio,6") or die("Problemas en el select ".mysqli_error($conexion));
    //Fecha - (fecha)Mide_Sensor
    //Tipo - (Modelo)Sensores
    //Valor - (valor)Mide_Sensor
    //Unidad de medida - (tipo)Variable_Meteorologica
    //Sensor utilizado - (Id)Sensor
    print "<table class='table' style='width:100%'>";
    print "<thead class='thead-dark'>";
    print "<tr>";
    print "<th scope='col'>Fecha</th>";
    print "<th scope='col'>Valor</th>";
    print "<th scope='col'>Unidad de medida</th>";
    print "<th scope='col'>Sensor utilizado</th>";
    print "</tr>";
    print "</thead>";
    print "<tbody>";
        if(isset($_REQUEST['posicion'])){
            $inicio = $_REQUEST['posicion'];
        } else {
            $inicio = 0;
        }
        $contador = 0;
        while($reg=mysqli_fetch_array($registros)){
            print "<tr>";
            print "<td>".$reg['Fecha_Hora']."</td>";
            print "<td>".$reg['Valor']."</td>";
            print "<td>".$reg['Variables_Id']."</td>";
            print "<td>".$reg['modelo']."</td>";
            print "</tr>";
            $contador++;
        }
    print "</table>";
print "</div>";
        //Boton de siguiente
print "<div id='fr' style='float:right;width:8%;height:8%;margin-top:100px'>";
        if(($contador+$inicio) > mysqli_num_rows($registros)){
        print "<img src='flecha-d.png' style='width:100%;height:100%'></img>";
        }else{
        $siguiente = $inicio+6;
        print "<a href='Principal.php?posicion=$siguiente'><img src='flecha-d.png' style='width:100%;height:100%'></a>";
        }
print "</div>";
print "</div>";
?>
<!--Fin Consulta-->
<!--Inicio Refrescar pagina-->
<?php
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