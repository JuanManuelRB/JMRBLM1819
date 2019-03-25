<?php
    $sec = trim(htmlspecialchars( strip_tags($_REQUEST["sec"]), ENT_QUOTES, "UTF-8"));
    if($sec >= 0){
        if(filter_var($sec, FILTER_VALIDATE_INT)){
            $minutos = floor(($sec / 60));
            $segundos = ($sec % 60);
            print "$sec segundos son $minutos minutos y $segundos segundos";
        }
    }else{
        print "El numero debe ser mayor o igual a cero";
    }   
?>