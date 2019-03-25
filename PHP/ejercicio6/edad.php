<?php

$form = trim(htmlspecialchars( strip_tags($_REQUEST["edad"]), ENT_QUOTES, "UTF-8"));
$email = $_REQUEST["email"];

if(is_numeric($form)){
    print "Su edad es $form";
    
}else{
    print "Error hay que introducir un numero";
}
 print "<br/>";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    print "Su email es $email";

}else{
    print "Su email no es correcto";

}

?>