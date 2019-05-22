<?php
require 'format.inc.php';
require 'wumpus.inc.php';

$room = 1; // Starting room
$birds = 7;  // Room with the birds
$wumpus = 16; // wumpus location, BEWARE
$pits = array(3, 10, 13);    // Rooms with a bottomless pit

$cave = cave_array();
if(isset($_GET['r'])) {
    // We have been passed a room number
    $room = $_GET['r'];
}

// move player from bird room 7 to room 10
if($room == 7){
    $room = 10;
}

// player dies when entering pit
if(in_array($room, $pits) or $room == $wumpus){
    header("Location: lose.php");
}
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
        <p id="room-number">You are in room <?php echo $room; ?></p>

        <?php
        //check if birds room is adjacent
        for($i=0; $i<=2; $i++){
            if($cave[$room][$i] == $birds){
                echo "<p>You hear birds!</p>";
            }
        }
        ?>

        <?php
        //check if pit is adjacent
        for($i=0; $i<=2; $i++){
            if(in_array($cave[$room][$i],$pits)){
                echo "<p>You feel a draft!</p>";
            }
        }
        ?>

<!--        <p>You smell a wumpus!</p>-->

        <div class="rooms">
            <div class="room">
                <img src="images/cave2.jpg" alt="cave2">
                <p><a href="game.php?r=<?php echo $cave[$room][0]; ?>"><?php echo $cave[$room][0]; ?></a></p>
                <p><a href="">Shoot Arrow</a></p>
            </div>

            <div class="room">
                <img src="images/cave2.jpg" alt="cave2">
                <p><a href="game.php?r=<?php echo $cave[$room][1]; ?>"><?php echo $cave[$room][1]; ?></a></p>
                <p><a href="">Shoot Arrow</a></p>
            </div>

            <div class="room">
                <img src="images/cave2.jpg" alt="cave2">
                <p><a href="game.php?r=<?php echo $cave[$room][2]; ?>"><?php echo $cave[$room][2]; ?></a></p>
                <p><a href="">Shoot Arrow</a></p>
            </div>
        </div>

        <p>You have 3 arrows remaining.</p>


    </div>

</body>
</html>