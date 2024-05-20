<?php

class NewError extends Controllers{

    public function __construct()
    {
        parent::__construct();
        $this->view->mensajeError="archivo no encontrado";
        $this->view->render('errores/index');
        # echo '<p>error al cargar el archivo</p>';
    }
    
}

?>