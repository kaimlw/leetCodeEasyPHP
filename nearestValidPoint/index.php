<?php
// Runtime 219ms Memory 31.8 mb
function nearestValidPoint($x, $y, $points)
{
    $index = -1;
    $dist = -1;

    for ($i = 0; $i < count($points); $i++) {
        if ($points[$i][0] == $x || $points[$i][1] == $y) {
            $dist_temp = abs($x - $points[$i][0]) + abs($y - $points[$i][1]);
            if ($dist == -1) {
                $dist = $dist_temp;
                $index = $i;
            } elseif ($dist > $dist_temp) {
                $dist = $dist_temp;
                $index = $i;
            }
        }
    }

    return $index;
}

// echo nearestValidPoint(3, 4, [[1, 2], [3, 1], [2, 4], [2, 3], [4, 4]]);
echo nearestValidPoint(3, 4, [[2, 3]]);
