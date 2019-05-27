<?php
$xml = simplexml_load_file('empleados.xml');

echo '<h4>Listado de empleados</h4>';
$list = $xml->registro;
for ($i=0; $i < count($list); $i++){
    echo 'Nº' . $list[$i]->attributes()->numero . '<br/>';
    echo 'Puesto: ' . $list[$i]->puesto . '<br/>';
    echo 'Nombre: ' . $list[$i]->nombre . '<br/>';
    echo '<hr/>';
}

?>