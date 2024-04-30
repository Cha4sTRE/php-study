<?php

//declara tipado estricto
declare(strict_types=1);

const API_URl = "https://www.whenisthenextmcufilm.com/api";
/*
$ch = curl_init(API_URl);

# recibir resultado y no mostrar en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

# ejucutar y guardar
$result = curl_exec($ch);
*/

//funcion que recive argummento string(obligatorio)
// y retorna un arreay asosiativo

/*function get_content(string $url):array
{
    $result= file_get_contents(API_URl);
    $data = json_decode($result, true);
    return $data;
}
*/

require_once 'nextMovie.php';
$next_movie= NextMovie::feth_and_create_movie(API_URl);
$next_movie_data= $next_movie->get_data();

function render_template(string $template, array $data=[])
{
    extract($data);
    require "templates/$template.php";
}
//curl_close($ch);
//$data=get_content(API_URl);
?>

<!DOCTYPE html>
<html lang="en">

    <?php render_template('head',$next_movie_data); ?>
    <?php render_template('body',$next_movie_data) ?>

</html>