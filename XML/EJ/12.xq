for $a in //bookstore/book
where $a/year[ends-with(.,"3")]

return
<resultado>
  <titulo>{$a/title}</titulo>
</resultado>

(:Mostrar los libros escritos en años que terminen en 3:)