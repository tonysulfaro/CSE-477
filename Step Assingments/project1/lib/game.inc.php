<?php

session_start();

define("LIGHTS_SESSION", 'lights');


// create new session if not before
if(!isset($_SESSION[LIGHTS_SESSION])){
    $_SESSION[LIGHTS_SESSION] = new LightGame\LightGame();
}

$lights = $_SESSION[LIGHTS_SESSION];