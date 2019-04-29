for $f in //pedidos
let $tot:=1

return 
<cantidadTotal>{$tot + $f/m}</cantidadTotal>