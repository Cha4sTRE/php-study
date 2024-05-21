<!DOCTYPE html>
<html lang="en">

<?php require 'views/head.php' ?>
<body>

    <?php require 'views/header.php' ?>

    <main>
        <section class="seccion1">

            <div class="container">
                <h2>seccion de nuevo</h2>
                <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="post">
                    <label for="">matricula</label>
                    <input type="text" name="matricula" id="">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="">
                    <label for="">Apellido</label>
                    <input type="text" name="apellido" id="">
                    <input type="submit" value="submit" name="buscar">
                </form>
                <p><?php  echo $this->mensaje ?></p>
            </div>
            

        </section>


    </main>

    <?php require 'views/footer.php' ?>

</body>
</html>