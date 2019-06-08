<?php


namespace LightGame;


class LightGameController
{
    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;
        if(isset($post['name'])){
            $game->setPlayerName($post['name']);
        }
    }

    public function isReset(){
        return $this->isReset;
    }

    private $isReset = false;
    private $game;
}