<!--TODO make a view for this form-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Light Em Up! Options</title>
    <link href="game.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<header>
    <p class="center"><img src="images/lightemup-800.png" width="800" height="140" alt="Header image"/></p>
    <nav><p><a href="./">NEW GAME</a> <a href="game.php">RETURN TO GAME</a></p></nav>
    <h1 class="center">Light Em Up! Options</h1>
</header>
<div class="body">
    <form class="options" method="post" action="post/options-post.php">
        <div class="controls">
            <p class="checkbox"><label><input type="checkbox" name="lighted"> Show lighted squares</label></p>
            <p class="checkbox"><label><input type="checkbox" name="completed"> Show completed clues</label></p>
            <p>
                <button type="submit" name="submit">Submit</button>
            </p>
        </div>
    </form>
</div>
<footer>
    <p class="center"><img src="images/lightemup1-800.png" width="800" height="93" alt="Footer image"/></p>
</footer>
</body>
</html>
