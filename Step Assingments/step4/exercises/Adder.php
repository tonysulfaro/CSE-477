<?php


class Adder
{

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSum()
    {
        return $this->a + $this->b;
    }

    private $a;
    private $b;
}