<?php

$autor = trim(htmlspecialchars(strip_tags($_REQUEST["autor"]), ENT_QUOTES, "UTF-8"));
$titulo = trim(htmlspecialchars(strip_tags($_REQUEST["titulo"]), ENT_QUOTES, "UTF-8"));
$categoria = trim(htmlspecialchars(strip_tags($_REQUEST["categoria"]), ENT_QUOTES, "UTF-8"));
$fecha = trim(htmlspecialchars(strip_tags($_REQUEST["fecha"]), ENT_QUOTES, "UTF-8"));
$texto = trim(htmlspecialchars(strip_tags($_REQUEST["texto"]), ENT_QUOTES, "UTF-8"));

$conn = mysqli_connect("db4free.net:3306", "adminies", "Adminies", "bddrss") or die("Problemas en la conexion");
$registro = mysqli_query($conn, "INSERT INTO noticias(autor,titulo,categoria,fecha,noticia)
                                    VALUES ('$autor', '$titulo', '$categoria', $fecha, '$texto')"
                        ) 
or die("Problemas en la consulta: ".mysqli_error($connect));

mysqli_close($conn);

?>