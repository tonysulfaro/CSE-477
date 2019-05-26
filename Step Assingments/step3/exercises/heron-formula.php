<?php
function heron($a, $b, $c)
{
    $s = ($a + $b + $c) / 2;
    $a = $s * ($s - $a) * ($s - $b) * ($s - $c);
    if ($a < 0) {
        return null;
    }

    return sqrt($a);
}

function heron_display($a, $b, $c)
{
    $a_orig = $a;
    $s = ($a + $b + $c) / 2;
    $a = $s * ($s - $a) * ($s - $b) * ($s - $c);
    if ($a < 0) {
        return "<p>Are you an idiot? No triangle has sides $a_orig, $b, and $c.</p>";
    }
    $result = sqrt($a);
    return "<p>The area of a triangle with sides $a_orig, $b, and $c will be $result</p>";
}

print_r(heron(5, 5, 5));
echo "<br>";
print_r(heron(5, 5, 15));
echo "<br>";
print_r(heron(1, 2, 3));
echo "<br>";

print_r(heron_display(5, 5, 5));
print_r(heron_display(5, 5, 15));
print_r(heron_display(1, 2, 3));
