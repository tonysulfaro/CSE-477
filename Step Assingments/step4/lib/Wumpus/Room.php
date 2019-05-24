<?php

namespace Wumpus;


class Room
{

    /**
     * Constructor
     *
     * Every room has an index into the array in the Wumpus class.
     * These are values starting at 1. They also have an assigned
     * room number, which is what the user sees.
     *
     * @param int $ndx Index into the array of rooms
     * @param int $num The assigned room number
     */
    public function __construct($ndx, $num)
    {
        $this->ndx = $ndx;
        $this->num = $num;
    }

    /**
     * Get the index into the wumpus cave array of rooms
     * @return int Index value starting at 1
     */
    public function getNdx()
    {
        return $this->ndx;
    }

    /**
     * The assigned room number
     * @return int Room number
     */
    public function getNum()
    {
        return $this->num;
    }

    private $ndx;   //room index in wumpus game
    private $num;   //assigned room number
}