<?php

class View{
    public $mensajeError;
    public $mensaje;
    public $alumnos;
    public function __construct()
    {
        # echo "<p>vista cargada</p>";
    }
    public function render($vista){
        require 'views/'.$vista.'.php';
    }
}

?>