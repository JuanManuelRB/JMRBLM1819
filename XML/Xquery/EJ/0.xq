let $a:=//bookstore/book
let $total:=sum($a/price)
  for $precios in $a/prices  
  return
    <resultado>
      <total>{$total}</total>
      <precios>{$precios}</precios>
    </resultado>
(:Mostrar cada uno de los precios de los libros, y al final una nueva etiqueta con la suma de los precios (Función sum()) :)