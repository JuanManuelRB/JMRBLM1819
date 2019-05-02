(:Mostrar todos los pedidos del 10/01/2019 que sean del tipo A. Muestre la descripción, fecha y cantidad.:)
for $p in //pedidos/pedido
where $p/fecha = "10/01/2019"
return
<pedido>
<descripcion>{$p/descripcion/text()}</descripcion>
<fecha>{$p/fecha/text()}</fecha>
<cantidad>{$p/cantidad/text()}</cantidad>
</pedido>