<?php

namespace Guessing;

class GuessingController
{
    /**
     * GuessingController constructor.
     * @param Guessing $guessing - guessing game instance
     * @param $guess - param coming in within the URL
     */
    public function __construct(Guessing $guessing, $guess)
    {
        $this->guessing_instance = $guessing;

        if(isset($guess['clear'])){
            $this->is_reset = true;
        }
        if(isset($guess['value'])){
            $this->guessing_instance->guess(strip_tags($guess['value']));
        }
    }

    public function guess($num){
        $this->guessing_instance->guess($num);
    }

    public function isReset(){
        return $this->is_reset;
    }

    private $guessing_instance;
    private $is_reset = false;
}


