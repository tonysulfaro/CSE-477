<?php


namespace LightGame;


class LightGameViewOptions extends LightGameViewBase
{
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
}