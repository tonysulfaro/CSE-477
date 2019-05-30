<?php


namespace Guessing;


class Guessing
{
    const MIN = 1;
    const MAX = 100;

    public function __construct($seed = null) {
        if($seed === null) {
            $seed = time();
        }

        srand($seed);
        $this->number = rand(self::MIN, self::MAX);
    }

    private $number;
}