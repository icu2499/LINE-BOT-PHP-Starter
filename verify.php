<?php
$access_token = 'XXXXXXXXXXXXXXXXXXXXXXX';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $KgjDXVFpW7EuU9WOFSy0DzSieKFavlz0IzI7lHhtXLk+YMqXuNRVcFl34qBguUsNb5/0H7uL8swwEj75qFQRRIHKJSw9PnQ8ltrbYrbejwac9T9LKHjZo34231E+4Qhf6wzy7ZJr/3J0N1Dfm4qzjQdB04t89/1O/w1cDnyilFU=);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
