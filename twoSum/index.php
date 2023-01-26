<?php
function TwoSum($nums, $target)
{
    $result = array();
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] == $target) {
                $result = array($i, $j);
                break;
            }
        }
    }

    var_dump($result);
}

TwoSum([2, 7, 11, 15], 9);
