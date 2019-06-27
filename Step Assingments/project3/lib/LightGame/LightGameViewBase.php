<?php


namespace LightGame;


class LightGameViewBase
{

    public function presentFooter()
    {
        $html = <<< HTML
<footer>
<p class="center"><img src="images/lightemup1-800.png" width="800" height="93" alt="Footer image"/></p>
</footer>
HTML;
        return $html;
    }

}