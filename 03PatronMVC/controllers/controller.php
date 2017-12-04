<?php

class MvcController{

    #llamada de la plantilla
    public function plantilla(){
        include "views/template.php";
    }

    #interaccion del usuario

    public function enlacePaginasController(){

        if(isset( $_GET["action"])){
            $enlaces = $_GET["action"];
        }
        else{
            $enlaces = "index";
        }
        $respuesta = EnlacesPaginas::enlacePaginaModel($enlaces);
        include $respuesta;
    }


}

?>