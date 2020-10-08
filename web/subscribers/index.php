<?php

require_once("../functions.php");

// Default parameters if not specified
$defaults = [
    "color" => "blue",
    "logo" => "youtube",
    "logoColor" => "white",
    "style" => "flat-square",
    "format" => "short",
    "label" => "YouTube subscribers",
    "labelColor" => "gray",
    "id" => "UCipSxT7a3rn81vGLw9lqRkg",
    "key" => "[YOUR API KEY HERE]" // you can put your API key here if you deploy it yourself
];

// Query for finding subscriber count in JSON
$query = "$.items[0].statistics.subscriberCount";

// Build the Shields.io url using the above parameters and JSON query
$url = getShieldURL($query, $defaults);

// Set the content type for output
header('Content-type: image/svg+xml');

// Get response from the URL and output its contents
$response = curl_get_contents($url);

// get format param and format the subscribers accordingly
$format = validateParam("format", "/^(commas|short|none)$/", $defaults);
$response = formatSubscribers($response, $format);

echo $response;
