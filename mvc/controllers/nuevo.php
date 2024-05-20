<?php

class Nuevo extends Controllers{

    public function __construct()
    {
        parent::__construct();
        $this->view->render('nuevo/index');
    }


}

?>