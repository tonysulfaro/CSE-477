<?php


namespace LightGame;


class LightGameControllerOptions
{

    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;

        if (isset($post['lighted']) && isset($post['completed'])) {
            $game->enableCompletedSquares();
            $game->enableLightedSquares();
        }
        else if (isset($post['lighted']) && !isset($post['completed'])) {
            $game->enableLightedSquares();
            $game->disableCompletedSquares();
        }
        else if (!isset($post['lighted']) && isset($post['completed'])) {
            $game->disableLightedSquares();
            $game->enableCompletedSquares();
        }
        else if(!isset($post['lighted']) && !isset($post['completed'])){
            $game->disableLightedSquares();
            $game->disableCompletedSquares();
        }
    }

    private $game;

}