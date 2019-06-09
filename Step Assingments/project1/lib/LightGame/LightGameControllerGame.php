<?php


namespace LightGame;


class LightGameControllerGame
{

    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;

    }

    public function isReset()
    {
        return $this->isReset;
    }

    private $isReset = false;
    private $game;

}