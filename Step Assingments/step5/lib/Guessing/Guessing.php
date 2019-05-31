<?php


namespace Guessing;


class Guessing
{
    // constants
    const MIN = 1;
    const MAX = 100;
    const INVALID = -1;
    const TOOLOW = 0;
    const CORRECT = 1;
    const TOOHIGH = 2;
    const NOGUESS = 5;

    // ctor
    public function __construct($seed = null)
    {
        if ($seed === null) {
            $seed = time();
        }

        srand($seed);
        $this->number = rand(self::MIN, self::MAX);
    }

    // getters
    public function getNumber()
    {
        return $this->number;
    }

    public function getNumGuesses()
    {
        return $this->num_guesses;
    }

    public function getGuess()
    {
        return $this->user_guess;
    }

    // functions
    public function guess($num)
    {
        $this->user_guess = $num;

        # validate input
        if (is_numeric($num)) {
            if ($num <= 100 && $num >= 1) {
                $this->num_guesses++;
            }
        }
    }

    public function check()
    {
        # check if is numeric
        if (! is_numeric($this->user_guess) || $this->user_guess < self::MIN || $this->user_guess > self::MAX) {
            return self::INVALID;
        }
        if ($this->num_guesses == 0) {
            return self::NOGUESS;
        }
        if ($this->user_guess == $this->number) {
            return self::CORRECT;
        }
        if ($this->user_guess < $this->number) {
            return self::TOOLOW;
        } else {
            return self::TOOHIGH;
        }
        # check if they have guessed before they check
        # check ranges and return constants
    }

    // working vars
    private $number;
    private $user_guess;
    private $num_guesses = 0;
}