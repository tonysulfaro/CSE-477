<?php


namespace LightGame;


class LightGameViewGame extends LightGameViewBase
{

    public function __construct(LightGame $lightGame)
    {
        $this->lightgame = $lightGame;
        $this->playerName = $lightGame->getPlayerName();
    }

    public function presentHeader()
    {
        $html = <<< HTML
<header>
    <p class="center"><img src="images/lightemup-800.png" width="800" height="140" alt="Header image"/></p>
    <nav><p><a href="./">NEW GAME</a> <a href="options.php">OPTIONS</a> <a href="instructions.php">INSTRUCTIONS</a></p>
    </nav>
    <h1 class="center">Greetings, $this->playerName, and welcome to Light Em Up!</h1>
</header>
HTML;
        return $html;
    }

    public function presentBody()
    {
        $confirmCheck = <<< HTML
        <div class="controls"><p><button name="yes">Yes</button> <button name="no">No</button></p>
<p class="message">Are you sure you want to check?</p></div>
HTML;

        $confirmClear = <<< HTML
        <div class="controls"><p><button name="yes">Yes</button> <button name="no">No</button></p>
<p class="message">Are you sure you want to clear?</p></div>
HTML;

        $confirmSolve = <<< HTML
        <div class="controls"><p><button name="yes">Yes</button> <button name="no">No</button></p>
<p class="message">Are you sure you want to solve?</p></div>
HTML;


        // TODO change form action to post/game-post.php
        $html = <<< HTML
<div class="body">
    <form class="game" method="post" action="game-post.php">
HTML;

        $html .= '<table>';

        // generate row
        for ($row = 1; $row <= $this->lightgame->getHeight(); $row++) {

            $html .= '<tr>';

            // generate cell
            for ($col = 1; $col <= $this->lightgame->getWidth(); $col++) {
                $html .= $this->getCell($row, $col);
            }
            $html .= '</tr>';
        }
        $html .= '</table>';


        $mainControls = <<< HTML
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
HTML;
        if ($this->lightgame->getSolveStatus()) {
            $html .= $confirmSolve;
        } else if ($this->lightgame->getClearStatus()) {

            $html .= $confirmClear;
        } else {
            $html .= $mainControls;
        }

        return $html;
    }

    public function getCell($row, $col)
    {
        // is it a wall
        $wall_collection = $this->lightgame->getWalls();

        foreach ($wall_collection as $wall_item) {

            if ($wall_item['row'] == $row && $wall_item['col'] == $col) {
                $wall_value = $wall_item['value'];
                return '<td class="wall">' . $wall_value . '</td>';
            }
        }

        if ($this->lightgame->getLights()->lightExists($row, $col)) {
            $light_value = $this->lightgame->getLights()->getLightValue($row, $col);

            //there is a light here
            if ($light_value == 1) {

                // check enabled and is wrong placement
                if($this->lightgame->getCheckStatus() & !$this->lightgame->getLights()->isCorrectPosition($row, $col)){
                    return '<td class="light lighted wrong"><button name="cell" value="' . $row . ',' . $col . '">&nbsp;</button></td>';
                }

                // return yellow background
                if($this->lightgame->isLightedSquares() | $this->lightgame->getSolvedStatus()){
                    return '<td class="light lighted"><button name="cell" value="' . $row . ',' . $col . '">&nbsp;</button></td>';
                }

                // return white background
                return '<td class="light"><button name="cell" value="' . $row . ',' . $col . '">&nbsp;</button></td>';

            // wall here
            } elseif ($light_value == 2) {
                return '<td class="unshaded"><button name="cell" value="' . $row . ',' . $col . '">•</button></td>';
            }
        }
        if($this->lightgame->getSolvedStatus()){
            return '<td class="unshaded lighted"><button name="cell" value="' . $row . ',' . $col . '">•</button></td>';
        }

        return '<td><button name="cell" value="' . $row . ',' . $col . '">&nbsp;</button></td>';
    }

    public function present()
    {
        $html = $this->presentHeader();
        $html .= $this->presentBody();
        $html .= $this->presentFooter();
        return $html;
    }

    private $lightgame;
    private $playerName;
}