<?php
require 'format.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Wumpus Killed You</title>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<?php echo present_header("Stalking the Wumpus"); ?>

<div class="game">
    <p><img src="images/wumpus-wins.jpg" id="cave-img-big" alt="wumpus-win"></p>
    <p>You died and the Wumpus ate your brain!</p>

    <nav class="welcomeNav">
        <p><a href="welcome.php">New Game</a></p>
    </nav>

</div>

</body>
</html>