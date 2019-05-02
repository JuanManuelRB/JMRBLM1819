(:Mostrar todos los pedidos del usuario con id 3 que no estén pagados y sean del tipo B. Mostrar el login del usuario, el nombre, email, la descripción y la fecha del pedido.:)
for $p in doc("pedidos.xml")/pedidos/pedido,
$u in doc("usuarios.xml")/usuarios/usuario
where $p/pagado = "S" and $p/tipo = "B" and $p/usuario = 3 and $u/id = 3
return
<pedido>
<login>{$u/login/text()}</login>
<nombre>{$u/nombre/text()}</nombre>
<email>{$u/email/text()}</email>
<descripcion>{$p/descripcion/text()}</descripcion>
<fecha>{$p/fecha/text()}</fecha>
</pedido>