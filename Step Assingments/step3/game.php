<?php
require 'format.inc.php';
require 'wumpus.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stalking the Wumpus</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <?php echo present_header("Stalking the Wumpus"); ?>

    <div class="game">
        <p><img src="images/cave.jpg" id="cave-img-big" alt="cave"></p>
        <?php
        echo '<p>' . date("g:ia l, F j, Y") . '</p>';
        ?>
        <p id="room-number">You are in room 6</p>
        <p>You hear birds!</p>
        <p>You feel a draft!</p>
        <p>You smell a wumpus!</p>

        <div class="rooms">
            <div class="room">
                <img src="images/cave2.jpg" alt="cave2">
                <p><a href="">3</a></p>
                <p><a href="">Shoot Arrow</a></p>
            </div>

            <div class="room">
                <img src="images/cave2.jpg" alt="cave2">
                <p><a href="">13</a></p>
                <p><a href="">Shoot Arrow</a></p>
            </div>

            <div class="room">
                <img src="images/cave2.jpg" alt="cave2">
                <p><a href="">7</a></p>
                <p><a href="">Shoot Arrow</a></p>
            </div>
        </div>

        <p>You have 3 arrows remaining.</p>


    </div>

</body>
</html>