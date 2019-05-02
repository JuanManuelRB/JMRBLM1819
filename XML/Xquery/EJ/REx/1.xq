(:Obtener los pedidos de los usuarios pagados, ordenados por cantidad. Mostrar el login, nombre, cantidad, pagado y fecha.:)
for $p in doc("pedidos.xml")//pedidos/pedido,
$u in doc("usuarios.xml")//usuarios/usuario
where $p/pagado = "S" and $u/id = $p/usuario
order by $p/cantidad
return
<Pedido>
<login>{$u/login/text()}</login>
<nombre>{$u/nombre/text()}</nombre>
<cantidad>{$p/cantidad/text()}</cantidad>
<pagado>{$p/pagado/text()}</pagado>
<fecha></fecha>
</Pedido>