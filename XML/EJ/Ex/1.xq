for $a in //usuarios/usuario
let $b:=//pedidos
where (($a/id = $b/pedido[@cod]) and ($b/cantidad>10))
order by $b/pedido/fecha
return
<resultado>
  <login>{$a/login/text()}</login>
  <nombre>{$a/home_dir/nombre/text()}</nombre>
  <descripcion>{$b/pedido/descripcion/text()}</descripcion>
  <cantidad>{$b/pedido/cantidad/text()}</cantidad>
  <fecha>{$b/pedido/fecha/text()}</fecha>
  
</resultado>