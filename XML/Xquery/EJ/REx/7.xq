(:Mostrar todos los usuarios que tienen cuenta de correo en gmail.:)
for $e in //usuarios/usuario
let $u := //usuarios/usuario
where contains($e/email, ["gmail"])
return
<usuario>
<nombre>{$u/nombre/text()}</nombre>
<email>{$e/email/text()}</email>
</usuario>