<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Light Em Up!</title>
    <link href="game.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<header>
    <p class="center"><img src="images/lightemup-800.png" width="800" height="140" alt="Header image"/></p>
    <nav><p><a href="instructions.php">INSTRUCTIONS</a></p></nav>
    <h1 class="center">Welcome to Student's Light Em Up!</h1>
</header>
<div class="body">
    <form class="newgame" method="post" action="post/index-post.php">
        <div class="controls">
            <p class="name"><label for="name">Name </label><br><input type="text" id="name" name="name">
            </p>
            <p><select name="game">
                    <option value="10x10easy-1.json">10x10 Easy</option>
                    <option value="5x5easy-1.json">5x5 Easy</option>
                    <option value="5x5hard-1.json">5x5 Hard</option>
                    <option value="7x7easy-1.json">7x7 Easy</option>
                    <option value="7x7medium-1.json">7x7 Medium</option>
                </select></p>
            <p>
                <button>Start or Continue Game</button>
            </p>
        </div>
    </form>
</div>
<footer>
    <p class="center"><img src="images/lightemup1-800.png" width="800" height="93" alt="Footer image"/></p>
</footer>
</body>
</html>
