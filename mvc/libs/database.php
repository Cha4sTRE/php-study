<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    public function connect(){

        try {

            $coneccion= "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
            $opciones= [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo= new PDO($coneccion,$this->user,$this->password,$opciones);
            return $pdo;

        } catch (PDOException $e) {
            print_r('error: '.$e->getMessage());
        }   
        
    }
}

?>