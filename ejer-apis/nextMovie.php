<?php

class NextMovie{

public function __construct(
    private  $title,
    private  $poster_url,
    private  $days_until,
    private  $release_date,
    private  $following_production
){}

public static function feth_and_create_movie(string $api_url):NextMovie
{
    $result= file_get_contents($api_url);
    $data = json_decode($result, true);
    return new self(
        $data["title"],
        $data["poster_url"],
        $data["days_until"],
        $data["release_date"],
        $data["following_production"]["title"] ?? "desconocido"
    );
}
public function get_data()
{
    return get_object_vars($this);
}
}

?>