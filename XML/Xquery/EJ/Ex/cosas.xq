(:1.Obtener los pedidos de los usuarios cuya cantidad sea mayor que 10, ordenados por fecha del pedido. Mostrar el login, nombre, descripci�n, cantidad y fecha.:)
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

(:2.Mostrar los pedidos cuya cantidad sea menor o igual que 20. Mostrar s�lo la descripci�n, tipo y cantidad.:)
for $ped in //pedidos/pedido
where $ped/cantidad <= 20
return
<pedido>
<descripcion>{$ped/descripcion/text()}</descripcion>
<tipo>{$ped/tipo/text()}</tipo>
<cantidad>{$ped/cantidad/text()}</cantidad>
</pedido>

(:3.Mostrar todos los pedidos del usuario con c�digo 1 que est�n pagados y sean del tipo A. Mostrar el login del usuario, la descripci�n y la fecha del pedido.:)
for $ped in //pedidos/pedido,
$usuario in doc("usuarios.xml")//usuarios/usuario
where contains($ped/pagado, [S]) and contains($ped/tipo, [A]) and $ped/usuario = 1 and $usuario/id = $ped/usuario
return
<pedido>
<login>{$usuario/login/text()}</login>
<descripcion>{$ped/descripcion/text()}</descripcion>
<fecha>{$ped/fecha/text()}</fecha>
</pedido>

(:4.Mostrar la cantidad total de los pedidos. Etiquetarla como cantidadTotal.:)
let $total := //pedidos/pedido/cantidad
return
<cantidadtotal>{sum($total)}</cantidadtotal>

(:5.Mostrar la cantidad m�xima y m�nima de los pedidos.:)
let $cantidad := //pedidos/pedido/cantidad
return
<Extremos>
<cantidadmaxima>{max($cantidad)}</cantidadmaxima>
<cantidadminima>{min($cantidad)}</cantidadminima>
</Extremos>

(:6.Mostrar todos los pedidos del 10/01/2019. Muestre la descripci�n, fecha y cantidad.:)
for $pedido in //pedidos/pedido
where $pedido/fecha = "10/01/2019"
return
<pedido>
<descripcion>{$pedido/descripcion/text()}</descripcion>
<fecha>{$pedido/fecha/text()}</fecha>
<cantidad>{$pedido/cantidad/text()}</cantidad>
</pedido>

(:7.Mostrar todos los usuarios que tienen cuenta de correo en gmail.:)
for $email in //usuarios/usuario/email
let $usr := //usuarios/usuario
where contains($email, ["gmail"])
return
<usuario>
<nombre>{$usr/nombre/text()}</nombre>
<email>{$email/text()}</email>
</usuario>

(:8.Genera una p�gina html con una tabla con los pedidos pagados.:)
for $ped in //pedidos/pedido
where contains($ped/pagado, ["S"])
return
<html>
<body>
<table style="border: 1px solid black">
<tr>
<td>descripcion:{$ped/descripcion/text()}</td>
<td>fecha:{$ped/fecha/text()}</td>
<td>cantidad:{$ped/cantidad/text()}</td>
<td>tipo:{$ped/tipo/text()}</td>
<td>usuario:{$ped/usuario/text()}</td>
</tr>
</table>
</body>
</html>

(:9.Inserta un nuevo usuario con los datos que estimes oportunos.:)
insert node into //usuarios
<usuario>
  <id>4</id>
  <login>Alejandro</login>
  <password>2323a</password>
  <home_dir>/home/Alejandro</home_dir>
  <nombre>Alejandro</nombre>
  <email>"alejandro@gmail.com"</email>
</usuario>

(:10.Actualiza el pedido con c�digo 6 a pagado.:)
replace value of node //pedidos/pedido[@cod=6]/pagado
with <pagado>S</pagado>