<?php

function cave_array() {
    $cave = array(1 => array(5, 6, 2),
        2 => array(1, 8, 3)
    );

    return $cave;
}

print_r(cave_array());
