<?php

if(isset($_POST)){
    $salarioBase=$_POST["salario-base"];
    $horasExtrasDiurnas=$_POST["horas-diurnas"];
    $horasExtrasNocturnas=$_POST["horas-nocturnas"];
}

$valorHora= ($salarioBase/30)/8;
$valorExtraDiurna= ($valorHora*1.25)*$horasExtrasDiurnas;
$valorExtraNocturnas= ($valorHora*1.75)*$horasExtrasNocturnas;
$auxilio= 162000 ? $salarioBase<=2600000 :0;
$fondoSolidario= ($salarioBase*0.01) ? $salarioBase>5200000 && $salarioBase>20800000 :0;

$devengado= $salarioBase+$horasExtrasDiurnas+$horasExtrasNocturnas;
$salud= $pension= $devengado*(4/100);

$sueldoTotal= ($devengado+$auxilio)-($salud+$pension+$fondoSolidario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora de salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Calculadora de salario</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="form-calculadora">
                <form action="calcular_salario.php" method="post">
                    <label for="salario-base">
                        salario base: <input type="number" name="salario-base" id="salario-base">
                    </label>
                    <label for="horas-diurnas">
                        horas extras diurnas: <input type="number" name="horas-diurnas" id="horas-diurnas">
                    </label>
                    <label for="horas-nocturnas">
                        horas extras nocturnas: <input type="number" name="horas-nocturnas" id="horas-nocturnas">
                    </label>
                    <input type="submit" value="Calcular">
                </form>
                <div class="resultados">
                    <h3>sueldo total: <?=  intval($sueldoTotal) ?></h3>
                </div>
            </div>
        </div>
    </main>
</body>
</html>