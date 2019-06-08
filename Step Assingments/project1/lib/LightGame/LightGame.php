<?php


namespace LightGame;


class LightGame
{
    public function __construct(Lights $lights, $dir, $file)
    {
        $this->lights = $lights;
        $this->file = $file;

        $json = file_get_contents($dir . $file);
        $data = json_decode($json, true);

        $this->title = $data['title'];
        $this->width = $data['width'];
        $this->height = $data['height'];
    }

    public function getPlayerName(){
        return $this->playerName;
    }

    private $playerName = "TEST NAME";

}