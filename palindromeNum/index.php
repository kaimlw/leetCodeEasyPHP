<?php
function isPalindrome($x)
{
    $isCountEven = false;
    $splitter = array();
    $result = false;

    if ($x < 0) {
        return false;
    }

    if (count(str_split($x)) == 1) {
        return true;
    }

    if (count(str_split($x)) % 2 == 0) {
        $isCountEven = true;
    };

    if ($isCountEven) {
        $splitter = array_chunk(str_split($x), (count(str_split($x)) / 2));
        $temp1 = $splitter[0];
        $temp2 = $splitter[1];

        for ($i = 0; $i < count($temp1); $i++) {
            if ($temp1[$i] == $temp2[count($temp1) - $i - 1]) {
                $result = true;
            } else {
                return false;
            }
        }
    } else {
        $splitter = array_chunk(str_split($x), (count(str_split($x)) / 2) + 1);
        $temp1 = $splitter[0];
        $temp2 = $splitter[1];

        unset($temp1[count($temp1) - 1]);


        for ($i = 0; $i < count($temp1); $i++) {
            var_dump($temp1[$i]);
            echo "<br/>";
            var_dump($temp2[count($temp1) - $i - 1]);
            echo "<br/>";
            if ($temp1[$i] == $temp2[count($temp1) - $i - 1]) {
                $result = true;
            } else {
                return false;
            }
        }
    }

    return $result;
}

echo isPalindrome(1000021);
