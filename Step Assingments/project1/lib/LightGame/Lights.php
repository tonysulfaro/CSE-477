<?php


namespace LightGame;


class Lights
{

    public function __construct()
    {

    }

    public function solutionCorrect()
    {
        return $this->lights == $this->solution;
    }

    public function buildSolution($data)
    {
        foreach ($data as $light) {
            $row = $light['row'];
            $col = $light['col'];
            $this->solution[$row][$col] = 0;
        }
    }

    public function addLight($row, $col)
    {
        if ($this->lightExists($row, $col)) {
            $this->lights[$row][$col]++;
            $this->lights[$row][$col] = $this->lights[$row][$col] % 3;
        } else {
            $this->lights[$row][$col] = 0;
        }
    }

    public function lightExists($row, $col)
    {

        if (array_key_exists($row, $this->lights)) {
            if (array_key_exists($col, $this->lights[$row])) {
                return true;
            }
        }
        return false;
    }

    public function getLightValue($row, $col){
        if($this->lightExists($row, $col)){
            return $this->lights[$row][$col];
        }
        return -1;
    }

    public function getLights()
    {
        return $this->lights;
    }

    public function clearLights(){
        $this->lights = [[]];
    }

    public function solve(){
        $this->lights = $this->solution;
    }

    private $lights = [[]];
    private $solution = [[]];
}