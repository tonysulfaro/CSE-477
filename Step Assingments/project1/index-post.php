<?php
require __DIR__ . '/lib/game.inc.php';

$controller = new LightGame\LightGameControllerWelcome($lightgame, $_POST);

if($controller->isError()){
    header("location: index.php");
}
else{
    header("location: game.php");
}

exit;