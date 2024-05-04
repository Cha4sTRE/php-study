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

        body {
            display: grid;
            place-content: center;
        }

        .formulario {
            border: 1px solid #000;
            margin: 10px 0;
            padding: 10px;
        }

        .formulario form>label {
            margin: 0 auto;
            display: block;
            padding: 5px 0px;
        }

        .formulario .matrices {
            display: flex;
        }
    </style>
</head>

<body>
    <div class="formulario">
        <form action="operarMatrices.php" method="post">
            <label for="sizeA">
                tamaño de matrizces: <input type="number" name="size" id="">
                <input type="submit" name="submit" value="crear">
            </label>

        </form>

        <?php if (isset($_POST['submit'])) : ?>
            <div class="matrices">

                <div class="matriz1">
                    <form action="operarMatrices.php" method="post" class="matriz1">
                        <input type="hidden" name="matriz_size" value="<?php echo $_POST['size'] ?>">
                        <?php for ($f = 0; $f < $_POST['size']; $f++) : ?>
                            <?php for ($c = 0; $c < $_POST['size']; $c++) : ?>
                                <input type="number" class="matrix_input" name="matriz1[<?= $f ?>][<?= $c ?>]" id="">
                            <?php endfor ?>
                            <br>
                        <?php endfor ?>
                    </form>
                </div>
                <h3>+</h3>
                <div class="matriz2">
                    <form action="operarMatrices.php" method="post" class="matriz2">
                        <input type="hidden" name="matriz_size" value="<?php echo $_POST['size'] ?>">
                        <?php for ($f = 0; $f < $_POST['size']; $f++) : ?>
                            <?php for ($c = 0; $c < $_POST['size']; $c++) : ?>
                                <input type="number" class="matrix_input" name="matriz2[<?= $f ?>][<?= $c ?>]" id="">
                            <?php endfor ?>
                            <br>
                        <?php endfor ?>


                    </form>
                </div>
            </div>
            <input type="submit" name="calcular" value="calcular">
        <?php endif ?>

    </div>
</body>

</html>

<?php

if (isset($_POST["calcular"])) {

    $size = $_POST['matriz_size'];
    $matriz1 = array();
    $matriz2 = array();
    $matriz3 = array();

    for ($f = 0; $f < $size; $f++) {
        $matriz1[$f] = array();
        for ($c = 0; $c < $size; $c++) {
            if (isset($_POST["matriz1[$f][$c]"])) {
                $matriz1[$f][$c] = $_POST['matriz1'][$f][$c];
            
            }
        }
    }
    for ($f = 0; $f < $size; $f++) {
        $matriz2[$f] = array();
        for ($c = 0; $c < $size; $c++) {
            if (isset($_POST["matriz2[$f][$c]"])) {
                $matriz2[$f][$c] = $_POST['matriz2'][$f][$c];
            }
        }
    }
    
    for ($f = 0; $f < $size; $f++) {
        $matriz3[$f] = array();
        for ($c = 0; $c < $size; $c++) {
            $matriz3[$f][$c] = $matriz1[$f][$c] + $matriz2[$f][$c];
        }
    }

    echo "<h2>suma de matrices</h2>";
    for ($f = 0; $f < $size; $f++) {
        for ($c = 0; $c < $size; $c++) {
            echo "<h3>[$matriz3[$f][$c]</h3>";
        }
        echo "<br>";
    }
}

?>