(: 
Obtener los pedidos de los usuarios cuya cantidad sea mayor que 10, ordenados por fecha del pedido. Mostrar el login, nombre, descripción, cantidad y fecha. :)
let $a:= doc("pedidos.xml")//pedidos/pedido
let $b:= doc("usuarios.xml")//usuarios/usuario
where $a/cantidad > 10
order by $a/fecha
return
<pedido>{}</pedido>
  

(:
Mostrar los pedidos cuya cantidad sea menor o igual que 20. Mostrar sólo la descripción, tipo y cantidad.
Mostrar todos los pedidos del usuario con id 1 que estén pagados y sean del tipo A. Mostrar el login del usuario, la descripción y la fecha del pedido.
Mostrar la cantidad total de los pedidos. Etiquetarla como “cantidadTotal”.
Mostrar la cantidad máxima y mínima de los pedidos.
Mostrar todos los pedidos del 10/01/2019. Muestre la descripción, fecha y cantidad.
Mostrar todos los usuarios que tienen cuenta de correo en gmail.
Genera una página html con una tabla con los pedidos pagados.
Inserta un nuevo usuario con los datos que estimes oportunos.
Actualiza el pedido con código 6 a pagado. :)
