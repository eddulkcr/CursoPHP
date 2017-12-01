<?php

#codigo imperativo

$automovil = (object)["marca"=>"Toyota", "modelo"=>"corola"] ;
$automovil2 = (object)["marca"=>"Hiunday", "modelo"=>"accent"];

function mostrar($auto){

    echo " <p>hola soy un $auto->marca, modelo $auto->modelo</p> <br> ";

}
mostrar($automovil);
mostrar($automovil2);
?> 