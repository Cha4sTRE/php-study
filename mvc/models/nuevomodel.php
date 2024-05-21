<?php
class NuevoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {

        # echo 'insertar datos nuevo alumno';
        $query = $this->db->connect()->prepare('INSERT INTO alumnos(matricula,nombre,apellido) VALUES(:matricula,:nombre,:apellido)');
        try {

            $query->execute([
                'matricula' => $datos['matricula'],
                'nombre' => $datos['nombre'],
                'apellido' => $datos['apellido']
            ]);
            return true;
        } catch (PDOException $e) {
            #print_r('ya existe ese alumno:' . $e->getMessage());
            return false;
        }
    }
}
