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
    <nav><p><a href="./">NEW GAME</a> <a href="options.php">OPTIONS</a> <a href="instructions.php">INSTRUCTIONS</a></p>
    </nav>
    <h1 class="center">Greetings, Player, and welcome to Light Em Up!</h1>
</header>
<div class="body">
    <form class="game" method="post" action="post/game-post.php">
        <table>
            <tr>
                <td>
                    <button name="cell" value="1,1">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="1,2">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="1,3">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="1,4">&nbsp;</button>
                </td>
                <td class="wall completed">0</td>
            </tr>
            <tr>
                <td class="wall">&nbsp;</td>
                <td>
                    <button name="cell" value="2,2">&nbsp;</button>
                </td>
                <td class="wall">1</td>
                <td>
                    <button name="cell" value="2,4">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="2,5">&nbsp;</button>
                </td>
            </tr>
            <tr>
                <td class="wall">2</td>
                <td>
                    <button name="cell" value="3,2">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="3,3">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="3,4">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="3,5">&nbsp;</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="cell" value="4,1">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="4,2">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="4,3">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="4,4">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="4,5">&nbsp;</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="cell" value="5,1">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="5,2">&nbsp;</button>
                </td>
                <td>
                    <button name="cell" value="5,3">&nbsp;</button>
                </td>
                <td class="wall">&nbsp;</td>
                <td>
                    <button name="cell" value="5,5">&nbsp;</button>
                </td>
            </tr>
        </table>
        <div class="controls">
            <p>
                <button name="check">Check Solution</button>
            </p>
            <p>
                <button name="solve">Solve</button>
            <p>
            <p>
                <button name="clear">Clear</button>
            </p>
        </div>
    </form>
</div>
<footer>
    <p class="center"><img src="images/lightemup1-800.png" width="800" height="93" alt="Footer image"/></p>
</footer>
</body>
</html>
