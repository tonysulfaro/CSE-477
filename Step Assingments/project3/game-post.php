<?php

require __DIR__ . '/lib/game.inc.php';
$controller = new LightGame\LightGameControllerGame($lightgame, $_POST);

header("location: game.php");
exit;