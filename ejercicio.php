
<?php
if($_POST){

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    echo "Hoola ".$nombre." ".$apellido. " - enviado atravez del metodo post";
}
if($_GET){
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    echo "hola ".$nombre." ".$apellido. "- enviado atravez de get";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio.php" method="post">
        nombre: <input type="text" name="nombre" id="">
        apellido: <input type="text" name="apellido" id="">
        <input type="submit" value="enviar">
    </form>
    <form action="ejercicio.php" method="get">
        nombre: <input type="text" name="nombre" id="">
        apellido: <input type="text" name="apellido">
        <input type="submit" value="enviar">
    </form>
</body>
</html>