<?php
function multiply($x, $y)
{
    if ($x > 10) {
        return "Please insert number less than 10";
    }

    $a = $x * $y;
    return $a;
}

echo multiply(23,7);
echo "<br>";
echo multiply(3,2);

