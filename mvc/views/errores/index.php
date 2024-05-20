<!DOCTYPE html>
<html lang="en">

<?php require 'views/head.php' ?>
<body>

    <?php require 'views/header.php' ?>

    <main>
        <section class="error">

            <div class="container">
                <h2><?php echo $this->mensajeError ?></h2>
            </div>
            
        </section>
    </main>

    <?php require 'views/footer.php' ?>

</body>
</html>