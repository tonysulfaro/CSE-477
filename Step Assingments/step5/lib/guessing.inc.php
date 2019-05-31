<?php
require __DIR__ . "/../vendor/autoload.php";

// Start the PHP session system
session_start();

define("GUESSING_SESSION", 'wumpus');

/* Something is missing here!!!! */
if (isset($_GET['seed'])) {
    $_SESSION[GUESSING_SESSION] = new Guessing\Guessing(strip_tags($_GET['seed']));
}


$guessing = $_SESSION[GUESSING_SESSION];