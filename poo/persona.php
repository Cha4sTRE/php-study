<?php
class Persona{

    /*
    private $nombre;
    private $apellido;
    private $edad;
    private $cedula;

    public function __construct($nombre,$apellido,$edad,$cedula){

        $this->nombre= $nombre;
        $this->apellido= $apellido;
        $this->edad= $edad;
        $this->cedula= $cedula;

    }
    */

    //promoted properties
    public function __construct(
        private $nombre,
        private $apellido,
        private $edad,
        private $cedula
    ){}

    public function get_nombre(){return $this->nombre;}
    public function get_apellido(){return $this->apellido;}
    public function get_edad(){return $this->edad;}
    public function get_cedula(){return $this->cedula;}

    public function description(){
        return 'hola soy '.$this->nombre.' '.$this->apellido.' y tengo '.$this->edad;
    }
    // un metodo estatico puede ser llamado sin nesecidad de crear una instancia de clase u objeto
    public static function acciones(){
        return 'puedo respirar, comer,caminar y hablar';
    }

}

$persona1= new Persona('Jefferson','Chaustre',20,1092);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h2><?= $persona1->description() ?></h2>
    <h3>acciones: <?= Persona::acciones() ?></h3> -->
</body>
</html>