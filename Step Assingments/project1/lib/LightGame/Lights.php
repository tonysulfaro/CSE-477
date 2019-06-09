<?php


namespace LightGame;


class Lights
{
    const LIGHT = 0;
    const MARKER = 1;

    public function __construct()
    {

    }

    public function solutionCorrect(){
        return $this->lights == $this->solution;
    }

    public function buildSolution($data){
        foreach ($data as $light){
            $row = $light['row'];
            $col = $light['col'];
            $this->solution[$row][$col] = 0;
        }
    }

    public function addLight($row, $col){
        $this->lights[$row][$col] = self::LIGHT;
    }

    public function lightExists($row, $col){

        if(array_key_exists($row, $this->lights)){
            if(array_key_exists($col, $this->lights[$row])){
                if($this->lights[$row][$col] != 0){
                   $this->lights[$row][$col] = 0;
                }
                $this->lights[$row][$col] ++;
                return true;
            }
        }
        return false;
    }

    public function getLights(){
        return $this->lights;
    }

    private $lights = [[]];
    private $solution = [[]];
}