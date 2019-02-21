<?php

    $email = trim($_REQUEST["correo"]);
    $confirmacion = trim($_REQUEST["confirmacion"]);
    $noticias = $_REQUEST["noticias"];

    if((filter_var($email, FILTER_VALIDATE_EMAIL)) && (filter_var($confirmacion, FILTER_VALIDATE_EMAIL))){

        if($email == $confirmacion){
            print "Su correo esta correcto,";
        }else{
            print "Su correo es incorrecto";
        }

    }else{
        print "Introduzca un correo valido";
    }
    print "<br/>";
    if($noticias != ""){
        if($noticias == "Si"){
            print "Recibira noticias";
        }else{
            print "No recibira noticias";
        }
    }else{
        print "No ha seleccionado nada";
    }

?>