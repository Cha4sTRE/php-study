<?php

class Consulta extends Controllers{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('consulta/index');
    }
}

?>