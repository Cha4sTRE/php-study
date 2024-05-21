<?php

class Consulta extends Controllers{
    public function __construct(){ parent::__construct(); }
    public function render(){ $this->view->render('consulta/index'); }
}

?>