<?php


namespace LightGame;


class LightGameControllerWelcome
{
    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;
        if (isset($post['name'])) {
            $game->setPlayerName($post['name']);
            if ($post['name'] != "") {
                $this->isError = false;
            }
        }
        if (isset($post['game'])) {
            $game->setGame($post['game']);
        }
    }

    public function isError()
    {
        return $this->isError;
    }

    private $isError = true;
    private $game;
}