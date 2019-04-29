for $x in doc(pedidos)/pedidos/pedido[cantidad > 10]
order by $x/fecha
let $z := doc(usuarios)/usuarios/usuario
return $z
