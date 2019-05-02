(:Genera una página html con una tabla con los pedidos no pagados.:)
for $ped in //pedidos/pedido
where contains($ped/pagado, ["S"])
return
<tr>
<td>descripcion {$ped/descripcion/text()}</td>
<td>fecha {$ped/fecha/text()}</td>
<td>cantidad {$ped/cantidad/text()}</td>
<td>tipo {$ped/tipo/text()}</td>
<td>usuario {$ped/usuario/text()}</td>
</tr>
