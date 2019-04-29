let $precios:=//bookstore/book/price,
$sumaprecios:=sum($precios)
return
  <listaPrecios>
    {$precios}
    <precioTotal>{$sumaprecios}</precioTotal>
  </listaPrecios>
(:Mostrar cada uno de los precios de los libros, y al final una nueva etiqueta con la suma de los precios Función sum()) :)