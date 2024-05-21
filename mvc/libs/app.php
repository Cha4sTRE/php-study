<?php

require_once 'controllers/errores.php';

class App{

    private $url;

    public function __construct()
    {
        #echo 'nueva app';
        //obtener url de htaccess
        $url = isset($_GET['url']) ? $_GET['url']: 'main';
        $url= rtrim($url,'/');
        //separar cadena en '/'
        $url=explode('/',$url);

        if(empty($url[0])){
            $archivoController= "controllers/main.php";
            require_once $archivoController;
            $controller= new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

        #var_dump($url);
        $archivoController= 'controllers/'.$url[0].'.php';

        if(file_exists($archivoController)){

            require_once $archivoController;
            //inicializa controlador
            $controller= new $url[0];
            $controller->loadModel($url[0]);

            //si hay un metodo
            if(isset($url[1])){
                #echo 'hay algo en 1';
                $controller-> {$url[1]}();
            }else{
                $controller->render();
            }

        }else{
            $controller= new NewError();
        }
    }

}

?>