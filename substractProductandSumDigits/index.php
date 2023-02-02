<?php
// Runtime 3ms Memory 18.9 mb
function substractProductAndSum($n)
{
    $str = strval($n);
    $prod = 1;
    $sum = 0;


    for ($i = 0; $i < strlen($str); $i++) {
        $prod *= $str[$i];
        $sum += $str[$i];
    }

    return $prod - $sum;
}

// Runtime 7ms Memory 19.4 mb
function substractProductAndSum2($n)
{
    $prod = 1;
    $sum = 0;

    while ($n >= 1) {
        $num = $n % 10;
        $prod *= $num;
        $sum += $num;

        $n = $n / 10;
    }

    return $prod - $sum;
}

echo substractProductAndSum(1);

echo "</br>";

echo substractProductAndSum2(1);
