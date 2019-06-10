<?php


namespace LightGame;


class LightGameControllerGame
{

    public function __construct(LightGame $game, $post)
    {
        $this->game = $game;

        // modify board
        if (isset($post['cell'])) {
            $location = $post['cell'];

            $indicies = explode(",", $location);

            $row = $indicies[0];
            $col = $indicies[1];

            $game->getLights()->addLight($row, $col);
        }

        //check solution
        if (isset($post['check'])) {
            $game->enableCheckSolution();
        }
        //solve
        if (isset($post['solve'])) {
            $game->enableSolveBoard();
        }

        //clear user lights
        if (isset($post['clear'])) {
            $game->enableClearBoard();
        }

        if (isset($post['yes'])) {
            if($game->getCheckStatus()){
                $game->checkSolution();
            }
            if($game->getSolveStatus()){
                $game->solveBoard();
            }
            if($game->getClearStatus()){
                $game->getLights()->clearLights();
            }
            $game ->disableOptions();
        }

        if (isset($post['no'])) {
            $game ->disableOptions();
        }
    }

    public function isReset()
    {
        return $this->isReset;
    }

    private $isReset = false;
    private $game;

}