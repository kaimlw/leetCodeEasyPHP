<?php
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];

function removeDuplicates(&$nums)
{
    // $nums = array_unique($nums);

    $n = $nums[0];
    // $total = count($nums);

    for ($i = 1; $i < max($nums); $i++) {
        if ($nums[$i] == $n) {
            unset($nums[$i]);
        } else {
            $n = $nums[$i];
        }
    }

}

var_dump($nums);
echo ("</br>");
echo ("</br>");

removeDuplicates($nums);

var_dump($nums);
