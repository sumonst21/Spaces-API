<?php
//Either:
require_once("spaces.php");
//OR COMPOSER:
//require_once("vendor/autoload.php"); //Install first by executing: composer require SociallyDev/Spaces-API in your project's directory.

$key = "354YWYX52KCALETWTPZX";
$secret = "0AbMelFMmHUDhXuV7CGDsEegYMbd74H8cqeeE6Dv4D0";

$space_name = "arwa-cdn";
$region = "SGP1";

$space = new SpacesConnect($key, $secret, $space_name, $region);

//List all Spaces available in account.
$spaces = $space->ListSpaces();
//var_dump($spaces);
//echo json_encode($spaces);

//List all files and folders
$files = $space->ListObjects();
//var_dump($files);
echo json_encode($files);
