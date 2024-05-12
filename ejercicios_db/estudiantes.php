<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .grid {
            display: grid;
            place-content: center;
            height: 100%;
        }

        form>* {
            display: block;
            margin-top: 5px;
        }

        form {
            margin: 0 auto;
            border: 1px solid #000;
            padding: 10px;
            width: 100%;
        }

        form input:not([name="submit"]) {
            width: 100%;
        }

        form input[name=submit] {
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <div class="grid">
        <h1>registro de estudiantes</h1>
        <form action="estudiantes.php" method="post" class="estudiantes">
            <label for="">nombre</label>
            <input type="text" name="nombre" id="">

            <label for="">apellido</label>
            <input type="text" name="apellido" id="">

            <label for="">edad</label>
            <input type="number" name="edad" id="">

            <label for="">cedula</label>
            <input type="number" name="cedula" id="">

            <label for="">carrera</label>
            <input type="text" name="carrera" id="">

            <input type="submit" value="enviar" name="submit">
            <input type="submit" value="ver estudianes" name="ver_estudiantes">
        </form>
    </div>

</body>

</html>

<?php

$server = "localhost";
$user = "root";
$password = "";



try {
    $coneccion = new PDO("mysql:host=$server;dbname=estudiantes", $user, $password);
    $coneccion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $cedula = $_POST['cedula'];
        $carrera = $_POST['carrera'];

        $instruccion = "INSERT INTO `estudiantes` (`id`,`nombre`,`apellido`,`edad`,`cedula`,`carrera`) VALUES ('NULL','$nombre','$apellido','$edad','$cedula','$carrera')";
        $insert_connect = $coneccion->exec($instruccion);
    }
    if (isset($_POST['ver_estudiantes'])) {

        $selecciona_tabla = "SELECT * FROM `estudiantes`";
        $sentencia_select = $coneccion->prepare($selecciona_tabla);
        $sentencia_select->execute();
        $resultado = $sentencia_select->fetchAll();

    }
} catch (PDOException $error) {
    echo $error;
}
?>

<?php if (isset($_POST['ver_estudiantes'])) : ?>

    <!--<?php print_r($resultado) ?>-->

    <?php foreach ($resultado as $estudiante) : ?>
        <div class="grid">

            <ul>
                <li><?=$estudiante['nombre'].' '.$estudiante['apellido']?></li>
                <li><?=$estudiante['edad']?></li>
                <li><?=$estudiante['cedula']?></li>
                <li><?=$estudiante['carrera']?></li>
            </ul>
        </div>
    <?php endforeach ?>

<?php endif ?>