for $libros in //bookstore/book
let $titulo:=$libros/title/text(),
$autores:=count($libros/author)

return 
<resultado>
  <titulo>{$titulo} ({$autores})</titulo>
</resultado>


(:Mostrar en la misma etiqueta el titulo y entre parentesis el numero de autores que tiene ese titulo:)