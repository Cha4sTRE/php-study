<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>welcome to my home <?php echo $user->getNombre() ?></h1>
            <nav>
                <div class="nav">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="includes/logaut.php">Logaut</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
</body>
</html>