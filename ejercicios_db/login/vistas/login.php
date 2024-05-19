<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="form">
        <form action="" method="POST">
            <?php
            if (isset($errorLogin)) {
                echo $errorLogin;
            }
            ?>
            <label for="">username</label>
            <input type="text" name="username">
            <label for="">contraseña</label>
            <input type="text" name="password">
            <input type="submit" value="iniciar sesion">

        </form>
    </div>
</body>

</html>