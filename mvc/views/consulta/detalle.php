<!DOCTYPE html>
<html lang="en">

<?php require 'views/head.php' ?>
<body>

    <?php require 'views/header.php' ?>

    <main>
        <section class="seccion1">

            <div class="container">
                <h2>Detalles de <?php echo $this->alumnos->nombre;?></h2>
                <form action="<?php echo constant('URL') ?>consulta/actualizarAlumno" method="post">
                    <label for="">matricula</label>
                    <input type="text" name="matricula" disabled value="<?php echo $this->alumnos->matricula ?>">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $this->alumnos->nombre ?>">
                    <label for="">Apellido</label>
                    <input type="text" name="apellido" value="<?php echo $this->alumnos->apellido ?>">
                    <input type="submit" value="actualizar" name="actualizar">
                </form>
            </div>
            

        </section>


    </main>

    <?php require 'views/footer.php' ?>

</body>
</html>