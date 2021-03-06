<?php


namespace LightGame;


class LightGame
{
    public function __construct(Lights $lights, $dir, $file, $playerName)
    {
        $this->lights = $lights;
        $this->file = $file;

        $json = file_get_contents($dir . $file);
        $data = json_decode($json, true);

        $this->title = $data['title'];
        $this->width = $data['width'];
        $this->height = $data['height'];

        $this->playerName = $playerName;
        $this->dir = $dir;
        $this->solution = $data['lights'];
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWalls()
    {
        return $this->walls;
    }

    public function getLights()
    {
        return $this->lights;
    }

    public function getLightValue($row, $col)
    {
        return $this->lights[$row][$col];
    }

    public function getPlayerName()
    {
        return $this->playerName;
    }

    public function setPlayerName($name)
    {
        $this->playerName = $name;
    }

    public function setGame($game)
    {
        $this->file = $game;

        $json = file_get_contents(__DIR__ . '/games/' . $this->file);
        $data = json_decode($json, true);

        $this->title = $data['title'];
        $this->width = $data['width'];
        $this->height = $data['height'];

        $this->walls = $data['walls'];
        $this->solution = $data['lights'];
        $this->lights->buildSolution($this->solution);
    }

    public function getFileName()
    {
        return $this->file;
    }

    //options
    public function enableLightedSquares()
    {
        $this->lightSquares = true;
    }

    public function disableLightedSquares()
    {
        $this->lightSquares = false;
    }

    public function enableCompletedSquares()
    {

        $this->completedSquares = true;
    }

    public function disableCompletedSquares()
    {

        $this->completedSquares = false;
    }

    public function isLightedSquares()
    {
        return $this->lightSquares;
    }

    public function isCompletedSquares()
    {
        return $this->completedSquares;
    }

    // action items
    public function enableCheckSolution()
    {
        $this->checkSolution = true;
    }
    public function disableCheckSolution(){
        $this->checkSolution = false;
    }

    public function enableSolveBoard()
    {
        $this->solveBoard = true;
    }

    public function solveBoard(){
        $this->lights->solve();
    }

    public function enableClearBoard()
    {
        $this->clearBoard = true;
    }

    public function disableOptions(){
        $this->checkSolution = false;
        $this->solveBoard = false;
        $this->clearBoard = false;
    }

    public function getCheckStatus(){
        return $this->checkSolution;
    }

    public function getSolveStatus(){
        return $this->solveBoard;
    }

    public function getClearStatus(){
        return $this->clearBoard;
    }

    public function checkSolution(){
        $this->checked = true;
    }

    public function setSolvedStatus($bool){
        $this->solved = $bool;
    }

    public function getSolvedStatus(){
        return $this->solved;
    }


    private $playerName = "TEST NAME";
    private $dir;
    private $walls;
    private $solution;

    private $lights;
    private $file;
    private $title;
    private $width;
    private $height;

    //options
    private $lightSquares = false;
    private $completedSquares = false;

    //action values
    private $checkSolution = false;
    private $solveBoard = false;
    private $clearBoard = false;

    //after invoke
    private $checked = false;
    private $solved = false;
}