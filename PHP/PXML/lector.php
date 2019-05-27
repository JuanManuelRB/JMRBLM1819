<?php
include 'archivo.php';

$peliculas = new SimpleXMLElement($xmlstr);

//Mostrar el argumento
echo $peliculas->pelicula[0]->argumento . '<br/>';

//Mostrar frase
echo $peliculas->pelicula[0]->{'grandes-frases'}->frase . '<br/>';

foreach($peliculas->pelicula->personajes->personaje as $p){
    echo $p->nombre . ' - ' . $p->actor . '<br/>';
}

foreach($peliculas->pelicula->puntuacion as $p){
    switch ($p['tipo']) {
        case 'votos':
            echo 'Votos: ' . $p . '<br/>';
            break;
        
        case 'estrellas':
            echo 'Estrellas: ' . $p . '<br/>';
            break;

        default:
            # code...
            break;
    }
}

//Modificar informacion
echo $peliculas->asXML() . '<br/>';
$peliculas->pelicula[0]->personajes->personaje[0]->nombre = 'Mi profesor';
echo $peliculas->asXML() . '<br/>';
?>