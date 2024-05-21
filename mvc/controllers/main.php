<?php

class Main extends Controllers{

    public function __construct(){ parent::__construct(); }
    public function render(){ $this->view->render('main/index'); }


}

?>