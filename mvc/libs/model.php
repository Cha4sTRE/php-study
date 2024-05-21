<?php

class Model{
    public $db;
    public function __construct()
    {
     #echo 'modelos';
     $this->db= new DB();
    }

}

?>