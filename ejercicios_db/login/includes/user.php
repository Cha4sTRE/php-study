<?php

include_once 'db.php';

class User extends DB{
    private $nombre;
    private $username;

    public function userExist($user,$pass){ //funcion que busca si usuario existe
        
        //instruccion sql
        $query= $this-> connect()-> prepare('SELECT *  FROM usuarios WHERE username=:user AND contraseña=:pass');
        //ejecuta llamada con instruccion
        $query-> execute([
            'user' => $user,
            'pass' => $pass
        ]);
        //verifica que haya filas
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query= $this->connect()-> prepare('SELECT * FROM usuarios WHERE username=:user');
        $query-> execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre=$currentUser['nombre'];
            $this->username=$currentUser['username'];
        }

    }
    public function getNombre(){
        return $this-> nombre;
    }

}

?>