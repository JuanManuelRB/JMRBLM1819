for $ped in doc("pedidos.xml")//pedidos/pedido,
$usrs in doc("usuarios.xml")//usuarios/usuario
where $ped/cantidad > 10 and $usrs/id = $ped/usuario
order by $ped/fecha
return
<Pedidos>
<usuario>
<login>{$usrs/login/text()}</login>
<nombre>{$usrs/nombre/text()}</nombre>
</usuario>
<pedido>
<descripcion>{$ped/descripcion/text()}</descripcion>
<cantidad>{$ped/cantidad/text()}</cantidad>
<fecha>{$ped/fecha/text()}</fecha>
</pedido>
</Pedidos>