<?php
require 'format.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>You Killed the Wumpus</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php echo present_header("Stalking the Wumpus"); ?>

<div class="game">
    <p><img src="images/dead-wumpus.jpg" id="cave-img-big" alt="dead-wumpus"></p>
    <p>You killed the Wumpus</p>

    <nav class="welcomeNav">
        <p><a href="welcome.php">New Game</a></p>
    </nav>

</div>

</body>
</html>