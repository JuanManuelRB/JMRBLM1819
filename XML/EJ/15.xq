(:Mostrar todos los años en los que se ha publicado un libro eliminando los repetidos (distinct-values):)

for $a in //bookstore/book
where distinct-values($a/year/text())

return
<titulo>{$a/title/text()}</titulo>