for $d in //pedidos

where (($d/pedido[@cod]="1") and ($d/pedido/tipo="A") and ($d/pedido/pagado="S"))

let $e:=//usuarios/usuario

return
<resultado>
  <login>{$e/login}</login>
  <descripcion>{}</descripcion>
  <fecha>{}</fecha>
</resultado>