<?php
 
//INSERTAR
"INSERT INTO estaciones(Marca, Modelo, IP, Tipo_Conex, Ubi) VALUES ('$marca','$modelo', '$ip', '$tipoc', '$ubi')"

//BORRAR
"DELETE FROM estaciones WHERE Id = $id";
            
			
//ACTUALIZAR
"UPDATE estaciones SET Marca = '$marca', Modelo = '$modelo',IP = '$ip', Tipo_Conex = '$tipoc', Ubi = '$ubi'"
 
 
?>
