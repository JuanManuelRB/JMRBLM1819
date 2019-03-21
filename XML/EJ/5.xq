for $a in //bookstore/book
where $a/year=2005
return 
        <lib2005>
          <titulo>{$a/title/text()}</titulo>
          <autor>{$a/author/text()}</autor>
        </lib2005>


(:Mostrar el titulo y autor de los libros del año 2005 y etiquetar cada uno de ellos con lib2005:)