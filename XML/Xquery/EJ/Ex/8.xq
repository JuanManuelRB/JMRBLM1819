let $l:=//pedidos/pedido

  for $k in //pedidos/pedido
  where $k/pagado="S"
  return
    