<?php
require 'format.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Stalking the Wumpus</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php echo present_header("Stalking the Wumpus"); ?>

<div class="game">
    <p><img src="images/cave-wumpus.jpg" id="cave-img-big" alt="wumpus"></p>

    <p>Welcome to <span class="bigText">Stalking the Wumpus</span></p>



    <nav class="welcomeNav">
        <p><a href="instructions.php">Instructions</a></p>
        <p><a href="game.php">Start game</a></p>
    </nav>
</div>


</body>
</html>