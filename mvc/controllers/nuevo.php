<?php

class Nuevo extends Controllers{

    public function __construct(){ parent::__construct(); }
    public function render(){ $this->view->render('nuevo/index'); }

    public function registrarAlumno(){
        $matricula=$_POST['matricula'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $mensaje='';
        if($this->model->insert([
            'matricula'=>$matricula,
            'nombre'=>$nombre,
            'apellido'=>$apellido
        ])){
            $mensaje='nuevo alumno';
        }else{
            $mensaje='la matricula ya existe';
        }
        $this->view->mensaje= $mensaje;
        $this->render();
    }
}

?>