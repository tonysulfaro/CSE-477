<?php
require_once "../lib/game.inc.php";
$controller = new \Lights\GameController($lights, $_POST);
//echo $controller->showRedirect();
//echo var_dump($_POST);
header("location: " . $controller->getRedirect());