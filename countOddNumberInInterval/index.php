<!-- Description -->
<!-- 
Given two non-negative integers low and high. 
Return the count of odd numbers between low and high (inclusive). 
-->
<?php
function countOdds($low, $high)
{
    $count = 0;

    // TIME LIMIT EXCEEDED WITH THIS METHOD
    // for ($i = $low; $i <= $high; $i++) {
    //     if ($i % 2 != 0) {
    //         $count++;
    //     }
    // } 

    // RUNTIME 5ms and MEMORY 19.3 mb 
    if (($high - $low + 1) % 2 == 0) {
        $count = ($high - $low + 1) / 2;
    } else {
        if ($low % 2 == 0) {
            $count = floor(($high - $low + 1) / 2);
        } else {
            $count = floor(($high - $low + 1) / 2);
            $count++;
        }
    }

    return $count;
}

echo (countOdds(798273637, 970699661));
