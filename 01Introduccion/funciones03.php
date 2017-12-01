<?php

#funciones sin parametros


function saludo(){
    echo "hola mundo <br> ";
}

saludo();

function despedida ($adios){
    echo $adios."<br>";
}
despedida("chao");

function restorno($retornar){
    return $retornar;
}

echo  restorno("retornado");

?> 