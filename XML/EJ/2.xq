(: Mostrar libros cuyo precio sea <= 30 :)

for $libro in //bookstore/book
where $libro/price <= 30
return $libro/title/text()
