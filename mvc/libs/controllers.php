<?php

class Controllers{
    public $view;
    public function __construct()
    {
        #echo '<p>controlleres</p>';
        $this->view= new View();
        
    }

}

?>