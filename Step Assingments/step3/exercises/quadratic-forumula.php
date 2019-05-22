<?php

function quadratic($a, $b, $c){
    if($b*$b-(4*$a*$c) < 0){
        return null;
    }
    else{
        $first = (-$b+sqrt($b*$b-(4*$a*$c)))/2*$a;
        $second = (-$b-sqrt($b*$b-(4*$a*$c)))/2*$a;

        return array($first, $second);
    }
}

print_r(quadratic(1, -5, 6));
echo "<br>";
print_r(quadratic(1, 1, 1));
echo "<br>";
print_r(quadratic(1, 2, 1));
echo "<br>";