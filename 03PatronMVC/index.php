<?php

/*el INDEX: en el mostraremos la salida de las vistas 
al usuario y tambien a traves de él enviaremos distintas acciones
que el ususario envie al controlador*/

require_once "controllers/controller.php";

$mvc = new MvcController();
$mvc -> plantilla();

?>