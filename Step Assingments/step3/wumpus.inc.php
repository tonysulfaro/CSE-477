<?php

function cave_array()
{
    $cave = array(
        1 => array(5, 6, 2),
        2 => array(1, 8, 3),
        3 => array(4, 10, 2),
        4 => array(5, 12, 3),
        5 => array(1, 14, 4),
        6 => array(7, 1, 15),
        7 => array(8, 16, 6),
        8 => array(9, 2, 7),
        9 => array(10, 17, 8),
        10 => array(11, 3, 9),
        11 => array(12, 18, 10),
        12 => array(13, 4, 11),
        13 => array(14, 9, 12),
        14 => array(15, 5, 3),
        15 => array(6, 20, 14),
        16 => array(20, 7, 17),
        17 => array(16, 9, 18),
        18 => array(17, 11, 19),
        19 => array(18, 13, 20),
        20 => array(16, 15, 19),
    );

    return $cave;
}

function birds_present($cave, $room, $birds)
{
    //check if birds room is adjacent
    for ($i = 0; $i <= 2; $i++) {
        if ($cave[$room][$i] == $birds) {
            return "<p>You hear birds!</p>";
        }
    }
}

function pit_present($cave, $room, $pits)
{
    //check if pit is adjacent
    for ($i = 0; $i <= 2; $i++) {
        if (in_array($cave[$room][$i], $pits)) {
            return "<p>You feel a draft!</p>";
        }
    }
}

function wumpus_present($cave, $room, $wumpus)
{
    //check if wumpus is adjacent
    for ($i = 0; $i <= 2; $i++) {
        if ($cave[$room][$i] == $wumpus) {
            return "<p>You smell a wumpus!</p>";
        }

        // adjacent room to search below
        $adj_room = $cave[$room][$i];

        // rooms two away from current location
        for ($j = 0; $j <= 2; $j++) {
            if ($cave[$adj_room][$j] == $wumpus) {
                return "<p>You smell a wumpus!</p>";
            }
        }
    }
}
