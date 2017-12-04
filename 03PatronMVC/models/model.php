<?php

class EnlacesPaginas{
 
    public function enlacePaginaModel($enlaces){

        if($enlaces == "inicio"|| 
           $enlaces == "nosotros"||
           $enlaces == "servicios"||
           $enlaces == "contactenos"){
               $module = "views/modulos/".$enlaces.".php";
           }

        return $module;

    }

}

?>