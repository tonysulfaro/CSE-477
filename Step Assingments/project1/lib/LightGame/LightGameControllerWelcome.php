<?php


namespace LightGame;


class LightGameControllerWelcome
{
    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;
        if (isset($post['name'])) {
            $game->setPlayerName($post['name']);
        }
        if(isset($post['game'])){
            $game->setGame($post['game']);
        }
    }

    public function isReset()
    {
        return $this->isReset;
    }

    private $isReset = false;
    private $game;
}