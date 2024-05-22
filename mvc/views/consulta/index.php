<!DOCTYPE html>
<html lang="en">

<?php require 'views/head.php' ?>
<body>

    <?php require 'views/header.php' ?>

    <main>
        <section class="seccion1">

            <div class="container">
                <h2>seccion de consulta</h2>
                <table width="100%" border="solid">
                    <thead style="background-color: gray;">
                        <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->alumnos as $row): ?>
                            <?php
                            include_once 'models/alumno.php';
                            $alumno= new Alumno();
                            $alumno= $row;
                            ?>
                            <tr>
                                <td><?php echo $alumno->matricula;  ?></td>
                                <td><?php echo $alumno->nombre;  ?></td>
                                <td><?php echo $alumno->apellido;  ?></td>
                                <td><a href="<?php echo constant('URL')."consulta/verAlumno/".$alumno->matricula ?>">Editar</a></td>
                                <td><a href="<?php echo constant('URL')."consulta/eliminarAlumno/".$alumno->matricula ?>">Eliminar</a></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
            
        </section>
    </main>

    <?php require 'views/footer.php' ?>

</body>
</html>