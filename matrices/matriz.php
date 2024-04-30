<?php

/* $matriz1=[
    [1,3,5,7,9],
    [2,4,6,8,10],
    [11,13,15,16]
];

for($f=0;$f<count($matriz1);$f++){
    for($c=0;$c<count($matriz1[$f]);$c++){
        echo "[".$matriz1[$f][$c]."]";
    }
    echo "<br>";
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            display: grid;
            place-content: center;
        }
        .formulario{
            border: 1px solid #000;
            margin: 10px 0;
            padding: 10px;
        }
        .formulario form> label{
            margin: 0 auto;
        }
        .matriz input[type="submit"]{
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <form action="matriz.php" method="post">
            <label for="size">
                tamaño de matriz: <input type="number" name="size" id="">
                <input type="submit" name="submit" value="crear">
            </label>
        </form>
    </div>
</body>
</html>

<?php if(isset($_POST['submit'])): ?>
    
    <form action="matriz.php" method="post" class="matriz">
        <input type="hidden" name="matriz_size" value="<?php echo $_POST['size']?>">
        <?php for($f=0;$f < $_POST['size'];$f++): ?>
            <?php for($c=0;$c < $_POST['size'];$c++): ?>
                <input type="number" class="matrix_input" name="matrix[<?=$f?>][<?=$c?>]" id="">
            <?php endfor ?>
            <br>
        <?php endfor ?>
        <input type="submit" name="calcular" value="calcular">
    </form>

<?php endif ?>

<?php
    if(isset($_POST['calcular'])){
        
        $size=$_POST['matriz_size'];
        $matrix=$_POST['matrix'];
        $sum_primario_diagonal=0;
        $sum_secundaria_diagonal=0;
    
        for($i=0;$i < $size;$i++){
            
            $sum_primario_diagonal+= $matrix[$i][$i];
            $sum_secundaria_diagonal+= $matrix[$i][$size-1-$i];
            
        }
    
        echo "<h2>la suma de su diagonal es: $sum_primario_diagonal</h2>";
    }

?>
