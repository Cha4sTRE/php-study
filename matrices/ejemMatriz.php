<!DOCTYPE html>
<html>
<head>
    <title>Suma de Diagonales</title>
</head>
<body>

<h2>Ingrese el tamaño de la matriz (n x n):</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Tamaño de la matriz: <input type="number" name="matrixSize" min="1" required>
    <input type="submit" name="submit" value="Enviar">
</form>

<div id="matrixInput">
<?php
if(isset($_POST['submit'])){
    $size = $_POST['matrixSize'];

    // Crear inputs para la matriz
    echo "<form id='matrixForm' method='post' action='".$_SERVER['PHP_SELF']."'>";
    echo "<input type='hidden' name='matrixSize' value='$size'>";
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            echo "<input type='number' class='matrixInput' name='matrix[$i][$j]' required>";
        }
        echo "<br>";
    }
    echo "<button name='calculate' type='submit'>Calcular</button>";
    echo "</form>";
}
?>
</div>

<div id="result">
<?php
if(isset($_POST['calculate'])){
    $size = $_POST['matrixSize'];
    $matrix = $_POST['matrix'];
    $sumPrimaryDiagonal = 0;
    $sumSecondaryDiagonal = 0;

    // Calcular la suma de la diagonal principal y secundaria
    for ($i = 0; $i < $size; $i++) {
        $sumPrimaryDiagonal += $matrix[$i][$i];
        $sumSecondaryDiagonal += $matrix[$i][$size - 1 - $i];
    }

    // Mostrar resultados
    echo "<p>La suma de la diagonal principal es: $sumPrimaryDiagonal</p>";
    echo "<p>La suma de la diagonal secundaria es: $sumSecondaryDiagonal</p>";
}
?>
</div>

</body>
</html>