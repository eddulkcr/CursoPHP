<?php

class MvcController{

    #llamada de la plantilla
    public function plantilla(){
        include "views/template.php";
    }

    #interaccion del usuario

    public function enlacePaginasController(){

        $enlaces = $_GET["action"];
        
        $respuesta = EnlacesPaginas::enlacePaginaModel($enlaces);
        include $respuesta;
    }


}

?>