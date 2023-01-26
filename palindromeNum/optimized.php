<?php
function isPalindrome($x)
{
    if ($x < 0) {
        return false;
    }

    $reverseNum = 0;

    while ($x > $reverseNum) {
        $reverseNum = $reverseNum * 10 + $x % 10;
        $x = floor($x / 10);
    }

    return ($x == $reverseNum || $x == floor($reverseNum / 10));
}
