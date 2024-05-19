<?php
require_once 'controllers/error.php';
class App{
    public function __construct()
    {
        echo 'nueva app';
        //obtener url de htaccess
        $url=$_GET['url'];
        $url= rtrim($url,'/');
        //separar cadena en '/'
        $url=explode('/',$url);

        #var_dump($url);
        $archivoController= 'controllers/'.$url[0].'.php';

        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller= new $url[0];
            //comprueba si existe algo despues de la primera direccion
            if(isset($url[1])){
                //si existe
                $controller-> {$url[1]}();
            }
        }else{
            $controller= new newError();
        }
    }

}

?>