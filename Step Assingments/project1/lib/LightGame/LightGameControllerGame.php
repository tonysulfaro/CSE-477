<?php


namespace LightGame;


class LightGameControllerGame
{

    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;

        if(isset($post['value'])){
            $game->setLight($post['value']);
        }
    }

    public function isReset()
    {
        return $this->isReset;
    }

    private $isReset = false;
    private $game;

}