<?php

// File to use the required functions
require_once("../functions.php");

// making the youtube Api Url to access the JSON data
$apiUrl = "https://www.googleapis.com/youtube/v3/channels?";
$apiUrl .= http_build_query(array(
            "part" => "statistics",
            "id"   => "UC-lHJZR3Gqxm24_Vd_AJ5Yw",//"UCipSxT7a3rn81vGLw9lqRkg",// your channel id
            "alt"  => "json",
            "key"  => "AIzaSyB66QFKg2skV3gGHDnNHJotxmMgKfy5k9E"//"[YOUR API KEY HERE]" // you can put your API key here if you deploy it yourself
                            ));
//getting the data from the url as JSON
$response = curl_get_contents($apiUrl);

// decoding the json data hence we can extract the Subscribers count
$decoded = json_decode($response);

// getting the subscribers count by querying throught the decoded json
$Subscribers = $decoded->items[0]->statistics->viewCount;

// getting the subscribers count to a rounded value and right format
$message = shortNumber($Subscribers);

// parameters for the Shield.io url to get the label and message in a particular format
$contents = [
    "label" => "Youtube View Count",
    "message" => $message,
    "color" => "brightgreen",
    "logo" => "youtube",
    "logoColor" => "white",
    "style" => "plastic",
    "labelColor" => "gray",
    "id" => "UC-lHJZR3Gqxm24_Vd_AJ5Yw",//"UCipSxT7a3rn81vGLw9lqRkg",
    "key" => "AIzaSyB66QFKg2skV3gGHDnNHJotxmMgKfy5k9E"//"[YOUR API KEY HERE]" // you can put your API key here if you deploy it yourself
];

// Build the Shields.io url using the above parameters
$url = "https://img.shields.io/static/v1?".http_build_query($contents);

//getting the contents of the image
$image = curl_get_contents($url);

// outputting the image to the page
echo $image;
