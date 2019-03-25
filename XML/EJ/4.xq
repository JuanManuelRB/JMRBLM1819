for $libro in //bookstore/book
order by $libro/@category, $libro/title
return $libro
(:Mostrar los libros ordenados por categoria y por titulo en una sola consulta:)