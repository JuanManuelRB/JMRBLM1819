(:Mostrar el titulo y el numero de caracteres que tiene cada titulo:)
for $a in //bookstore/book/title

return

<titulo>{$a/text()} ({string-length($a/text())})</titulo>

