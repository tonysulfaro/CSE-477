<?php
require 'format.inc.php';
require 'wumpus.inc.php';

$room = 1; // Starting room
$birds = 7;  // Room with the birds
$wumpus = 16; // wumpus location, BEWARE
$pits = array(3, 10, 13);    // Rooms with a bottomless pit
$cave = cave_array();

if (isset($_GET['r'])) {
    // We have been passed a room number
    $room = $_GET['r'];
}

if (isset($_GET['a'])) {
    if ($_GET['a'] == 16) {
        header("Location: win.php");
        exit;
    }
}

// move player from bird room 7 to room 10
if ($room == 7) {
    $room = 10;
}

// player dies when entering pit
if (in_array($room, $pits) or $room == $wumpus) {
    header("Location: lose.php");
    exit;
}
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
    <p id="room-number">You are in room <?php echo $room; ?></p>

    <?php echo birds_present($cave, $room, $birds); ?>
    <?php echo pit_present($cave, $room, $pits); ?>
    <?php echo wumpus_present($cave, $room, $wumpus); ?>

    <div class="rooms">
        <div class="room">
            <img src="images/cave2.jpg" alt="cave2">
            <p><a href="game.php?r=<?php echo $cave[$room][0]; ?>"><?php echo $cave[$room][0]; ?></a></p>
            <p><a href="game.php?r=<?php echo $room; ?>&a=<?php echo $cave[$room][0] ?>">Shoot Arrow</a></p>
        </div>

        <div class="room">
            <img src="images/cave2.jpg" alt="cave2">
            <p><a href="game.php?r=<?php echo $cave[$room][1]; ?>"><?php echo $cave[$room][1]; ?></a></p>
            <p><a href="game.php?r=<?php echo $room; ?>&a=<?php echo $cave[$room][1] ?>">Shoot Arrow</a></p>
        </div>

        <div class="room">
            <img src="images/cave2.jpg" alt="cave2">
            <p><a href="game.php?r=<?php echo $cave[$room][2]; ?>"><?php echo $cave[$room][2]; ?></a></p>
            <p><a href="game.php?r=<?php echo $room; ?>&a=<?php echo $cave[$room][2] ?>">Shoot Arrow</a></p>
        </div>
    </div>

    <p>You have 3 arrows remaining.</p>


</div>

</body>
</html>