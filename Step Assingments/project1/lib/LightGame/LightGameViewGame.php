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
        // TODO change form action to post/game-post.php
        $html = <<< HTML
<div class="body">
    <form class="game" method="post" action="game-post.php">
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

        return $html;
    }

    public function getCell($row, $col){
        // is it a wall
        $wall_collection = $this->lightgame->getWalls();

        foreach ($wall_collection as $wall_item){

            if($wall_item['row']==$row && $wall_item['col']==$col){
                $wall_value = $wall_item['value'];
                return'<td class="wall">'.$wall_value.'</td>';
            }
        }

        return '<td><button name="cell" value="'.$row.','.$col.'">&nbsp;</button></td>';;
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