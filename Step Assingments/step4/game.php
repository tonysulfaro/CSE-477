<?php
require 'format.inc.php';
require 'lib/game.inc.php';
$view = new Wumpus\WumpusView($wumpus);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stalking the Wumpus</title>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<?php echo present_header("Stalking the Wumpus"); ?>

<div class="game">
    <p><img src="images/cave.jpg" id="cave-img-big" alt="cave"></p>
    <?php
    echo '<p>' . date("g:ia l, F j, Y") . '</p>';
    ?>


    <?php
    echo $view->presentStatus();
    ?>

    <div class="rooms">
        <?php
        echo $view->presentRoom(0);
        echo $view->presentRoom(1);
        echo $view->presentRoom(2);
        ?>
    </div>

    <?php
    echo $view->presentArrows();
    ?>


</div>

</body>
</html>