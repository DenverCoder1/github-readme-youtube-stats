<?php

require_once("../functions.php");

// Default parameters if not specified
$defaults = [
    "color" => "brightgreen",
    "logo" => "youtube",
    "logoColor" => "white",
    "style" => "plastic",
    "format" => "short",
    "label" => "YouTube View Count",
    "labelColor" => "gray",
    "id" => "UCipSxT7a3rn81vGLw9lqRkg",
    "key" => "AIzaSyB66QFKg2skV3gGHDnNHJotxmMgKfy5k9E"//"[YOUR API KEY HERE]" // you can put your API key here if you deploy it yourself
];

// Query for finding view count in JSON
$query = "viewCount";

// Build the Shields.io url using the above parameters and JSON query
$url = getShieldURL($query, $defaults);

// Get response from the URL and output its contents
$response = (curl_get_contents($url));

echo $response;
