<?php
$thing = 0;
$guess_count = 0;

function guessText(){
    $html = <<<HTML
<p id="guess-status">After guesses you are too ???!</p>
HTML;
    return $html;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guessing Game</title>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<div class="game">
    <header>
        <h1>Guessing Game</h1>
    </header>

    <?php echo guessText()?>

    <form method="post" action="guessing-post.php">
        <p><label for="guess">Guess: </label><input name="guess"></p>
        <p><input type="submit"></p>
        <p><input type="button" value="New Game"></p>
    </form>
</div>

</body>