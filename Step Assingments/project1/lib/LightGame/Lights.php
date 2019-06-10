<?php


namespace LightGame;


use phpDocumentor\Reflection\Types\Array_;

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
            $this->solution[$row][$col] = 1;
        }
    }

    public function addLight($row, $col)
    {
        if ($this->lightExists($row, $col)) {
            $this->lights[$row][$col]++;
            $this->lights[$row][$col] = $this->lights[$row][$col] % 3;
        } else {
            $this->lights[$row][$col] = 1;
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

    public function isCorrectPosition($row, $col)
    {
        if (array_key_exists($row, $this->solution)) {
            if (array_key_exists($col, $this->solution[$row])) {
                return true;
            }
        }
        return false;
    }

    public function getLightValue($row, $col)
    {
        if ($this->lightExists($row, $col)) {
            return $this->lights[$row][$col];
        }
        return -1;
    }

    public function getLights()
    {
        return $this->lights;
    }

    public function clearLights()
    {
        $this->lights = [[]];
    }

    public function solve()
    {
        $this->lights = $this->solution;
    }

    //new data structure to store board data
    public function initializeBoard($width, $height, $walls)
    {

        // TODO move this to constructor eventually
        $this->walls = $walls;
        $this->height = $height;
        $this->width = $width;

        //create empty board
        $this->board = Array($height);
        for ($i = 0; $i < $height; $i++) {
            $this->board[$i] = Array($width);

            //populate cols in row
            for ($j = 0; $j < $width; $j++) {
                $this->board[$i][$j] = 0; // 0 is a white space
            }
        }

        // add walls
        foreach ($walls as $wall) {
            $row = $wall['row'];
            $col = $wall['col'];
            $this->board[$row][$col] = -1;
        }
    }

    public function addLightBoard($row, $col)
    {
        $this->board[$row][$col] = ($this->board[$row][$col]++) % 3;
    }

    public function solveBoard()
    {
        $this->initializeBoard($this->width, $this->height, $this->walls);
        foreach ($this->data as $light) {
            $row = $light['row'];
            $col = $light['col'];
            $this->board[$row][$col] = 1;
        }
    }

    private $lights = [[]];
    private $solution = [[]];

    private $board = [[]];
    private $width;
    private $height;
    private $walls;
    private $data; //light locations
}