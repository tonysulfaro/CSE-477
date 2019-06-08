<?php


namespace LightGame;


class LightGameViewWelcome extends LightGameViewBase
{
    public function __construct(LightGame $lightGame)
    {
     $this->lightGame = $lightGame;
    }

    public function presentHeader(){
        $html = <<< HTML
<header>
<p class="center"><img src="images/lightemup-800.png" width="800" height="140" alt="Header image"/></p>
<nav><p><a href="instructions.php">INSTRUCTIONS</a></p></nav>
<h1 class="center">Welcome to Tony Sulfaro's Light Em Up!</h1>
</header>
HTML;
        return $html;
    }

    public function presentBody()
    {
        $html = <<< HTML
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
HTML;
        return $html;
    }

    private $lightGame;
}