for $a in //bookstore/book
where $a/@category[starts-with(.,"C")]  and $a/contains(lower-case(title),"p")

return 
<titulo>{$a/title/text()}</titulo>


(:Mostar los libros cuya categoria empiece por "C":)
(:y que tengan una "P" mayúscula o minuscula en el título:)