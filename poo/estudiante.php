<?php

require 'persona.php';
class Estudiante extends Persona{

    /*
    private $cod_estudiante;
    private $carrera;
    private $promedio;
    private $semestre;

    public function __construct($nombre,$apellido,$edad,$cedula,$cod_estudiante,$carrera,$promedio,$semestre)
    {
        parent::__construct($nombre,$apellido,$edad,$cedula);
        $this->cod_estudiante= $cod_estudiante;
        $this->carrera= $carrera;
        $this->promedio= $promedio;
        $this->semestre= $semestre;
    } */

    public function __construct(
        $nombre,
        $apellido,
        $edad,
        $cedula,
        private $cod_estudiante,
        private $carrera,
        private $promedio,
        private $semestre
    ){
        parent::__construct($nombre,$apellido,$edad,$cedula);
    }

    public function get_cod_estudiante(){return $this->cod_estudiante;}
    public function get_carrera(){return $this->carrera;}
    public function get_promedio(){return $this->promedio;}
    public function get_semestre(){return $this->semestre;}
    

}

$estudiante1= new Estudiante('Rafael','Gaitan',20,10033,1033666,'software',4.5,3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?=$estudiante1->description()?></h2>
    <h3><?='estudio ingenieria de '. $estudiante1->get_carrera(). ' y mi promedio es de '.$estudiante1->get_promedio()?></h3>
</body>
</html>