<?php
define('bitly_api', 'https://api-ssl.bit.ly/v3/');

function bitly_shorten_url($access_token, $longUrl){
    $uri = bitly_api . 'shorten?access_token=' . $access_token . '&longUrl=' . $longUrl;
    $response = file_get_contents($uri);
    $json = @json_decode($response,true);

    return $json['data']['url'];
}

?>