for $g in //pedidos/pedido
let $max:=0
return 

if($g/cantidad>$max) $max:=$g/cantidad 


<Max>{$max}</Max>

