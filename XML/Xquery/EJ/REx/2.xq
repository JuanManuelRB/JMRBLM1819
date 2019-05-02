(:Mostrar los pedidos cuya cantidad sea mayor que 10. Mostrar sólo la descripción, fecha, tipo y cantidad.:)
for $p in doc("pedidos.xml")/pedidos/pedido
where $p/cantidad > 10
return
<pedido>
<descripcion>{$p/descripcion/text()}</descripcion>
<fecha>{$p/fecha/text()}</fecha>
<tipo>{$p/tipo/text()}</tipo>
<cantidad>{$p/cantidad/text()}</cantidad>
</pedido>