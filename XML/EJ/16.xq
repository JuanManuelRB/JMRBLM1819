(:Mostrar los títulos en una tabla html:)


  (for $b in //bookstore/book/title
  let $c := <tr>{$b/text()}</tr>
  return
  {$c}
  )


<body>
<table>

</table>
</body>