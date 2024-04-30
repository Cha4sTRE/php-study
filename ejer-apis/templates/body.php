

<body>
    <!--mostrar codigo formateado-->
    <!-- <pre><?php var_dump($data) ?></pre> -->
    <article>
        <h1>Last movie for MCU</h1>
        <h2><?= $title ?></h2>
        <img src="<?= $poster_url ?>" alt="poster">
        <h2><?= "fecha de estreno: " . $release_date ?></h2>
        <h3><?= "se estrena en: " . $days_until . " dias" ?></h3>
        <p>siguiente produccion<br><?= $following_production ?></p>
    </article>
</body>