<?php

require_once("../functions.php");

// Default parameters if not specified
$defaults = [
    "color" => "brightgreen",
    "logo" => "youtube",
    "logoColor" => "white",
    "style" => "flat-square",
    "label" => "YouTube view count",
    "labelColor" => "gray",
    "id" => "UCipSxT7a3rn81vGLw9lqRkg",
    "key" => "[YOUR API KEY HERE]" // you can put your API key here if you deploy it yourself
];

// Query for finding view count in JSON
$query = "$.items[0].statistics.viewCount";

// Build the Shields.io url using the above parameters and JSON query
$url = getShieldURL($query, $defaults);

// Set the content type for output
header('Content-type: image/svg+xml');

// Get response from the URL and output its contents
$response = (curl_get_contents($url));

//Adding Commas 
preg_match_all('!\d+!', strip_tags($response), $matches);
$response =  str_replace($matches[0][0], number_format($matches[0][0]), $response);

echo $response;