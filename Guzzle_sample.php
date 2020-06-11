<?php
require "vendor/autoload.php";
use \GuzzleHttp\Client

$client = new Client();
$bearer_token = 'YOUR_BEARER_TOKEN';
$endpoint_url = 'https://api.twitter.com/1.1/tweets/search/fullarchive/dev_env_label.json?query=keyword&maxResults=int';
$response = $client->request('GET', $endpoint_url, [
    'headers' => [
    'Content-Type' => 'application/json',
    'Authorization' => 'Bearer '.$bearer_token,
  ]
]);
echo $response->getBody();
