<?php
require_once('bitly.php');

$access_token = '';
$longUrl = 'https://github.com/chaitanyareddyk/bitly-api-boilerplate';
$short_url = bitly_shorten_url($access_token, $longUrl);

echo '<p> The short url is: <a href="' . $short_url . '">' . $short_url . '</a></p>';

?>