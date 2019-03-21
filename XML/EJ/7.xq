let $total:=count(//bookstore/book),
  $titulos := (
    for $libro in //bookstore/book
    return <titulo>{$libro/text()}</titulo>)
    
    return
    
    <resultado>
      {$titulos}
      <total>{$total}</total>
    </resultado>
 

(:Mostrar los titulos de los libros y al final el total de libros con una etiqueta <total>:)