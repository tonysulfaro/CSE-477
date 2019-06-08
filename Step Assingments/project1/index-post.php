<?php
require __DIR__ . '/lib/game.inc.php';

$controller = new LightGame\LightGameController($lightgame, $_POST);

if($controller->isReset()){
    unset($_SESSION[LIGHTS_SESSION]);
}

header("location: game.php");
exit;