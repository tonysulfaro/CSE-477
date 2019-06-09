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
    }

    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getWalls(){
        return $this->walls;
    }

    public function getPlayerName()
    {
        return $this->playerName;
    }

    public function setPlayerName($name)
    {
        $this->playerName = $name;
    }

    public function setGame($game){
        $this->file = $game;

        $json = file_get_contents(__DIR__.'/games/'. $this->file);
        $data = json_decode($json, true);

        $this->title = $data['title'];
        $this->width = $data['width'];
        $this->height = $data['height'];

        $this->walls = $data['walls'];
    }

    public function getFileName(){
        return $this->file;
    }

    private $playerName = "TEST NAME";
    private $dir;
    private $walls;

    private $lights;
    private $file;
    private $title;
    private $width;
    private $height;
}