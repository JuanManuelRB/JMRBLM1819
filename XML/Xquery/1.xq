for $x in doc("books.xml")/bookstore/book
where $x/price>30
return $x/title

for $x in doc("books.xml")/bookstore/book
where $x/price>30
order by $x/title
return $x/title



<ul>
{
for $x in doc("books.xml")/bookstore/book/title
order by $x
return <li>{$x}</li>
}
</ul>

<ul>
{
for $x in doc("books.xml")/bookstore/book/title
order by $x
return <li>{data($x)}</li>
}
</ul>



for $x in doc("books.xml")/bookstore/book
return if ($x/@category="children")
then <child>{data($x/title)}</child>
else <adult>{data($x/title)}</adult>



<html>
<body>

<h1>Bookstore</h1>

<ul>
{
for $x in doc("books.xml")/bookstore/book
order by $x/title
return <li>{data($x/title)}. Category: {data($x/@category)}</li>
}
</ul>

</body>
</html>


for $p in distinct-values(//price)
return <price group="{$p}">{
  for $b in //book[price = $p]
  return <book year="{$b/@year}"/>
}</price>