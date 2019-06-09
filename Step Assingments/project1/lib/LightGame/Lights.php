<?php


namespace LightGame;


class Lights
{
    const LIGHT = 0;
    const MARKER = 1;

    public function __construct()
    {

    }

    public function addLight($row, $col){
        $this->lights[$row][$col] = self::LIGHT;
    }

    public function lightExists($row, $col){
        return $this->lights[$row][$col];
    }

    public function getLights(){
        return $this->lights;
    }

    private $lights = [[]];
}