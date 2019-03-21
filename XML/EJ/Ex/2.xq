for $c in //pedidos/pedido

where $c/cantidad<=20

return
<resultado>
  <descripcion>{$c/descripcion/text()}</descripcion>
  <tipo>{$c/tipo/text()}</tipo>
  <cantidad>{$c/cantidad/text()}</cantidad>
</resultado>