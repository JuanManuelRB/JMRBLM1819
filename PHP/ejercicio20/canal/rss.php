<?php

header('Content-type: text/xml; charset="iso-8859-1"', true);
echo '<?xml version="1.0" encoding="iso-8859-1"?>';

$conn = mysqli_connect("db4free.net:3306", "adminies", "Adminies", "bddrss") or die("Problemas en la conexion");
$registro = mysqli_query($conn, "SELECT * FROM noticias order by fecha desc") 
or die("Problemas en la consulta: ".mysqli_error($connect));

echo '<rss version="2.0">';
echo '<channel>';
echo '<title>Noticias IES</title>';
echo '<link></link>';
echo '<languaje></languaje>';
echo '<description></description>';

while($r = fetch_array($registro)){
    echo '<item>';
    echo '<title>'.$reg[titulo].'</title>';
    echo '<link>'.'</link>';
    echo '<pubDate>'.$reg[fecha].'</pubDate>';
    echo '<category>'.$reg[categoria].'</category>';
    echo '<description>'.$reg[noticia].'</description>';
    echo '</item>';
}

echo '</channel>';
echo '</rss>';


mysqli_close($conn);


?>