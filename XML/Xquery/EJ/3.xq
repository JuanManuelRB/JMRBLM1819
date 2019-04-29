for $libro in //bookstore/book[price<=30]
return $libro/title/<title>{text()}</title>
