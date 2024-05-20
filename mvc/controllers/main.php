<?php

class Main extends Controllers{

    public function __construct()
    {
        parent::__construct();
        $this->view->render('main/index');
        # echo '<p>nuevo controller main</p>';
    }


}

?>