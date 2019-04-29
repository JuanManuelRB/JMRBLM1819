for $libros in //bookstore/book
let $cuantos:=count($libros/author)
return
  <libro>
    <titulo>{$libros/title/text()}</titulo>
    <autores>{$cuantos}</autores>
  </libro>


(:Mostrar el título y el número de autores que tiene cada libro en etiquetas diferentes:)

