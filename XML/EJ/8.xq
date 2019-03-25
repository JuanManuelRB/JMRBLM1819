let $max:=max(//bookstore/book/price)
let $min:=min(//bookstore/book/price)

return
  <libro>
    <max>{$max}</max>
    <min>{$min}</min>
  </libro>

(:Mostrat precio maximo y minimo de los libros:)