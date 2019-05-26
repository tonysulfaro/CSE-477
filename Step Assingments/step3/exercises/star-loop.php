<?php

echo "<!doctype html>";
echo "<html>";
echo "<head>";
echo '<meta charset="utf-8">';
echo "<title>Basic Page</title>";
echo "</head>";
echo "<body>";

for ($i = 1; $i <= 10; $i++) {
    $thing = "";
    for ($j = 1; $j <= $i; $j++) {
        $thing .= "*";
    }
    echo "<p>$thing $i stars</p>";
}

echo "</body>";
echo "</html>";
