(:Mostrar la cantidad máxima y mínima de los pedidos.:)
let $c := //pedidos/pedido/cantidad
return
<MaxMin>
<max>{max($c)}</max>
<min>{min($c)}</min>
</MaxMin>