<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        body {
            height: 100vh;
            display: grid;
            place-content: center;
        }

        .caja {
            margin: 10px 0px;
            border: 1px solid #000;
        }

        .caja * {
            margin: 5px;

        }

        .calculadora {
            border: 1px solid #000;
            padding: 5px;

        }

        .calculadora>* {

            margin: 5px;
        }

        .calculadora input:not([type="submit"]) {
            width: 50px;
            margin: 0px 5px;
        }
    </style>
</head>

<body>
    <h1>calculadora</h1>
    <div class="caja">
        <form action="calculadora.php" method="post">
            <h2>elige la operacion:</h2>
            <label for="">sumar<input type="radio" name="operacion" id="" value="sumar">
                <label for="">restar</label><input type="radio" name="operacion" id="" value="restar">
                <label for="">multiplicar</label><input type="radio" name="operacion" id="" value="multiplicar">
                <label for="">dividir</label><input type="radio" name="operacion" id="" value="dividir">
                <input type="submit" value="elegir" name="submit">
        </form>
    </div>
    <?php if (isset($_POST['submit'])) : ?>
        <form action="calculadora.php" method="post" class="calculadora">
            <label for="">numero 1:<input type="number" name="num1" id=""></label>
            <label>numero 2:<input type="number" name="num2" id=""></label>
            <input type="submit" value="calcular" name="operar">
            <!-- la puta madre con el hidden -->
            <input type="hidden" name="operacion" value="<?php echo $_POST['operacion'] ?>">
        </form>
    <?php endif; ?> 
</body>

<?php

if (isset($_POST['operar'])) {
    $operacion = $_POST['operacion'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultado=0;
    switch($operacion){
        case 'sumar':
            $resultado = $num1 + $num2;
            break;
        case 'restar':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicar':
            $resultado = $num1 * $num2;
            break;
        case 'dividir':
            if($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: División por cero";
            }
            break;
        default:
            $resultado = "Operación no válida";
    }

    echo "<p>El resultado es: $resultado</p>";
}
?>

</html>
