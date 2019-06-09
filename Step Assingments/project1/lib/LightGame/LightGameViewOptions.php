<?php


namespace LightGame;


class LightGameViewOptions extends LightGameViewBase
{

    public function __construct(LightGame $lightGame)
    {
        $this->game = $lightGame;
    }

    public function presentHeader()
    {
        $html = <<< HTML
<header>
    <p class="center"><img src="images/lightemup-800.png" width="800" height="140" alt="Header image"/></p>
    <nav><p><a href="./">NEW GAME</a> <a href="game.php">RETURN TO GAME</a></p></nav>
    <h1 class="center">Light Em Up! Options</h1>
</header>
HTML;
        return $html;
    }

    public function presentBody()
    {
        $html = <<< HTML
<div class="body">
    <form class="options" method="post" action="options-post.php">
        <div class="controls">
        
HTML;
        // add if checked
        if ($this->game->isLightedSquares() & $this->game->isCompletedSquares()) { // both checked
            $html .= '<p class="checkbox"><label><input type="checkbox" name="lighted" checked> Show lighted squares</label></p>';
            $html .= '<p class="checkbox"><label><input type="checkbox" name="completed" checked> Show completed clues</label></p>';
        } elseif ($this->game->isLightedSquares() & !$this->game->isCompletedSquares()) { // only lights checked
            $html .= '<p class="checkbox"><label><input type="checkbox" name="lighted" checked> Show lighted squares</label></p>';
            $html .= '<p class="checkbox"><label><input type="checkbox" name="completed"> Show completed clues</label></p>';
        } else if (!$this->game->isLightedSquares() & $this->game->isCompletedSquares()) { // only completed checked
            $html .= '<p class="checkbox"><label><input type="checkbox" name="lighted"> Show lighted squares</label></p>';
            $html .= '<p class="checkbox"><label><input type="checkbox" name="completed" checked> Show completed clues</label></p>';
        } else { // none checked
            $html .= '<p class="checkbox"><label><input type="checkbox" name="lighted"> Show lighted squares</label></p>';
            $html .= '<p class="checkbox"><label><input type="checkbox" name="completed"> Show completed clues</label></p>';
        }
        $html .= <<< HTML
            <p>
                <button type="submit" name="submit">Submit</button>
            </p>
        </div>
    </form>
</div>
HTML;

        return $html;
    }

    public function present()
    {
        $html = $this->presentHeader();
        $html .= $this->presentBody();
        $html .= $this->presentFooter();
        return $html;
    }

    private $game;
}