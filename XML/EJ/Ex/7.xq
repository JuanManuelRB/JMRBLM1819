for $j in //usuarios/usuario
let $aux:="@gmail.com"
where $j/home_dir/matches(nombre/text(),"juan@gmail.com")

return
<resultado>
  <usuario>{$j/login/text()}</usuario>
</resultado>