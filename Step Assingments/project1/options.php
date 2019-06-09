<?php
require __DIR__ . '/lib/game.inc.php';
$view = new LightGame\LightGameViewOptions($lightgame);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Light Em Up! Options</title>
    <link href="game.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<?php
echo $view->present();
?>

</body>
</html>
