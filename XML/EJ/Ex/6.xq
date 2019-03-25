for $i in //pedidos/pedido

where $i/fecha="10/01/2019"
return

<resultado>
  <descripcion>{$i/descripcion/text()}</descripcion>
  <fecha>{$i/fecha/text()}</fecha>
  <cantidad>{$i/cantidad/text()}</cantidad>
</resultado>