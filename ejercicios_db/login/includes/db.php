<?php
class DB{
    public function __construct(
        private $host="localhost",
        private $db_name="login",
        private $user="root",
        private $password="",
        private $charset="utf8mb4"
    ){}

    public function connect(){
        try{

            $coneccion="mysql:host=".$this->host.";dbname=".$this->db_name.";charset=".$this->charset;

            $options=[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $pdo= new PDO($coneccion,$this->user,$this->password,$options);
            return $pdo;

        }catch(PDOException $e){

            print_r("error capturado: ".$e->getMessage());
            
        }
    }
}
?>