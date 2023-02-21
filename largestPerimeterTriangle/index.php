<?php
// Runtime 80ms Memory 20.4 Mb
function largestPerimeter($nums)
{
    sort($nums);

    for ($i = count($nums) - 1; $i >= 2; $i--) {
        if ($nums[$i] < $nums[$i - 1] + $nums[$i - 2]) {
            return $nums[$i] + $nums[$i - 1] + $nums[$i - 2];
        }
    }

    return 0;
}



// echo (largestPerimeter([2, 1, 2]));
// echo (largestPerimeter([1, 2, 1, 10]));
echo (largestPerimeter([3, 2, 3, 4]));
