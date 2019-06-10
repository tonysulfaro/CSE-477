<?php


namespace LightGame;


class LightGameControllerGame
{

    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;

        if (isset($post['cell'])) {
            $location = $post['cell'];

            $indicies = explode(",", $location);

            $row = $indicies[0];
            $col = $indicies[1];

            $game->getLights()->addLight($row, $col);
        }
    }

    public function isReset()
    {
        return $this->isReset;
    }

    private $isReset = false;
    private $game;

}