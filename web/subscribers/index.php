<?php

$defaults = [
    "color" => "blue",
    "logo" => "youtube",
    "logoColor" => "white",
    "style" => "flat-square",
    "label" => "YouTube%20subscribers",
    "id" => "UCipSxT7a3rn81vGLw9lqRkg",
    "key" => "[YOUR API KEY HERE]"
];

function curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function validateParam($name, $pattern, $defaults)
{
    if (isset($_GET[$name]) && preg_match($pattern, $_GET[$name])) {
        return $_GET[$name];
    } else {
        return $defaults[$name];
    }
}

$color = validateParam("color", "/^(#[0-9a-fA-F]{6}|[A-Za-z]+)$/", $defaults);
$logo = validateParam("logo", "/^[A-Za-z0-9]+$/", $defaults);
$logoColor = validateParam("logoColor", "/^(#[0-9a-fA-F]{6}|[A-Za-z]+)$/", $defaults);
$style = validateParam("style", "/^[A-Za-z\-]+$/", $defaults);
$label = validateParam("label", "/^[A-Za-z0-9!~ %._,\-\/:'\"|=+&()*^$#@`{}?<>\[\]]+$/", $defaults);
$id = validateParam("id", "/^[A-Za-z0-9]+$/", $defaults);
$key = validateParam("key", "/^[A-Za-z0-9_]+$/", $defaults);

if (preg_match("/^\[.*\]$/", $key)) {
    die("Your API key is missing or invalid.");
}

header('Content-type: image/svg+xml');

$IMAGE_URL = "https://img.shields.io/badge/dynamic/json?color=$color&logo=$logo&logoColor=$logoColor&style=$style&label=$label&query=%24.items%5B0%5D.statistics.subscriberCount&url=https%3A%2F%2Fwww.googleapis.com%2Fyoutube%2Fv3%2Fchannels%3Fpart%3Dstatistics%26id%3D$id%26alt%3Djson%26key%3D$key";

$response = curl_get_contents($IMAGE_URL);

echo $response;