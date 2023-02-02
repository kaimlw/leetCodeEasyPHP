<?php
function hammingWeight($n)
{
    // Answer from Solution
    // Runtime 16ms Memory 18.9 mb
    $count = 0;
    while ($n != 0) {
        if ($n & 1 == 1) {
            $count++;
        }
        $n = $n >> 1;
    }

    return $count;
}

echo (hammingWeight(00000000000000000000000000001011));
