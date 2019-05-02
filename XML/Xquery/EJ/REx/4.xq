(:Mostrar la cantidad total de los pedidos de tipo A. Etiquetarla como “cantidadTotalA”.:)
let $p := //pedidos/pedido
where $p/tipo = "A"
return
<cantidadTotalA>{sum($p/cantidad)}</cantidadTotalA>
