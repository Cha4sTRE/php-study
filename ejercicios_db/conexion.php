<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$instruccion="INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`, `edad`, `cedula`, `semestre`) VALUES ('NULL', 'jared', 'bautista', '17', '1093', '3')";
$selecciona_tabla= "SELECT * FROM `estudiantes`"; 

/* try {

    $coneccion= new PDO("mysql:host=$servidor;dbname=estudiantes",$usuario, $contraseña); //->libreria
    $coneccion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //-> llama a las excepciones
    echo 'conexion establecida<br>';

    //$insertar_conexion->exec($instruccion);

    $sentencia_select= $coneccion->prepare($selecciona_tabla);
    $sentencia_select->execute();
    $resultado= $sentencia_select->fetchAll();

    //print_r($resultado);

    echo "<h2>nombres:</h2>";
    foreach ($resultado as $nombre) {
        echo $nombre['nombre']. "<br>";
    }


} catch (PDOException $error) {

    echo 'conexion fallida'.$error;

} */

$coneccion= mysqli_connect($servidor,$usuario,$contraseña);
mysqli_select_db($coneccion,"estudiantes");
$resultado= mysqli_query($coneccion, $selecciona_tabla);
//no es necesario fetcAll()
foreach($resultado as $estudiante){
    echo $estudiante['nombre'].' '.$estudiante['apellido']."<br>";
}

?>