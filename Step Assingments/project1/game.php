<?php
require __DIR__ . '/lib/game.inc.php';
$view = new \LightGame\LightGameViewGame($lightgame);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Light Em Up!</title>
    <link href="game.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<?php
echo $view->presentHeader();
echo $view->presentBody();
echo $view->presentFooter();
?>
</body>
</html>
