<?php

$xml = new DOMDocument();
$xml->encoding = 'utf-8';
$xml->version = '1.0';
$xml->formatOutput = true;

$principal = $xml->createElement('libreria');

$libro = $xml->createElement('libro');

$isbn = new DOMAttr('isbn', '112233');
$libro->setAttributeNode($isbn);

$titulo = $xml->createElement('titulo', 'Mi primer libro');

$libro->appendChild($titulo);
$principal->appendChild($libro);
$xml->appendChild($principal);

$xml->save('libreria.xml');
echo 'Fin libreria';
?>