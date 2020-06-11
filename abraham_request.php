<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
$consumerKey = "Your_CONSUMER_KEY";
$consumerSecret = "Your_CONSUMER_SECRET_KEY";

// $bearer = $connetction->oauth2("oauth2/token",array("grant_type"=>"client_credentials"));
$bearer_token = "YOUR_BEARER_TOKEN";
// $connetction = new TwitterOAuth($consumerKey,$consumerSecret,null,$bearer->access_token);  //bearerは環境変数に入れてもいいかも
$connetction = new TwitterOAuth($consumerKey,$consumerSecret,null,$bearer_token);
// SandBox
$statuses = $connetction->get("tweets/search/fullarchive/dev", ["query" => "hello", "maxResults" => 10]);
print_r($statuses);
// Prod
$statuses = $connetction->get("tweets/search/30day/development", ["query" => "ローランド", "maxResults" => 10]);
print_r($statuses);
