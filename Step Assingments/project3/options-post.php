<?php
require __DIR__ . '/lib/game.inc.php';

$controller = new LightGame\LightGameControllerOptions($lightgame, $_POST);

header("location: game.php");

exit;