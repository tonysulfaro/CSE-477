<?php
require __DIR__ . "/../vendor/autoload.php";
session_start();

define("LIGHTS_SESSION", 'lights');

//construct lights
$lights = new \LightGame\Lights(1);


// create new session if not before
if (!isset($_SESSION[LIGHTS_SESSION])) {
    $_SESSION[LIGHTS_SESSION] = new LightGame\LightGame($lights, '/games/5x5easy-1.json', '');
}

$lightgame = $_SESSION[LIGHTS_SESSION];