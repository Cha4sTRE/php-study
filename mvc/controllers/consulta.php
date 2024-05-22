<?php

class Consulta extends Controllers
{
    public $alumnos;
    public function __construct()
    {
        parent::__construct();
        $this->alumnos=[];
    }
    public function render()
    {
        $alumno= $this->model->getAlumno();
        $this->view->alumnos= $alumno;
        $this->view->render('consulta/index');
    }
    public function verAlumno($param=null){
        #var_dump($param);
        $idAlumno=$param[0];
        $alumno= $this->model->getById($idAlumno);

        session_start();
        $_SESSION["id_verAlumno"]= $alumno->matricula;

        $this->view->alumnos = $alumno;
        $this->view->render('consulta/detalle');
    }
    public function actualizarAlumno($param=null){

        session_start();

        $matricula= $_SESSION["id_verAlumno"];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];

        unset($_SESSION['id_verAlumno']);

        if($this->model->update([
            'matricula'=>$matricula,
            'nombre'=>$nombre,
            'apellido'=>$apellido
        ])){
            $alumno=new Alumno();
            $alumno->matricula= $matricula;
            $alumno->nombre= $nombre;
            
            $this->view->alumnos;
            $this->view->mensaje="alumno actualizado";

        }else{
            $this->view->mensaje="error al actualizar";
        }

        header('location:'.constant('URL').'/consulta');

    }
    public function eliminarAlumno($param=null){
        $matricula=$param[0];
        if($this->model->delete($matricula)){
            $mensaje="alumno eliminado";

        }else{
            $mensaje="error al eliminar";
        }
        header('location:'.constant('URL').'/consulta');
    }
}
