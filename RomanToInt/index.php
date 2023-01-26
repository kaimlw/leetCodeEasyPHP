<?php

function romanToInt($s)
{
    $map = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );

    $result = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        if ($map[$s[$i]] < $map[$s[$i + 1]]) {
            $result += $map[$s[$i + 1]] - $map[$s[$i]];
            $i++;
        } else {
            $result += $map[$s[$i]];
        }
    }

    echo $result;
}

romanToInt("IV");