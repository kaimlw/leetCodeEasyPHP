<?php
function lgstCommonPrefix($strs)
{
    $firstWord = array_shift($strs);

    $len_firstWord = strlen($firstWord);
    $prefix = "";

    for ($i = 0; $i < $len_firstWord; $i++) {

        foreach ($strs as $word) {
            if ($firstWord[$i] != $word[$i]) {
                break 2;
            }
        }
        $prefix .= $firstWord[$i];
    }

    $word = "abcd";
    echo substr($word, 0, 1);
}

lgstCommonPrefix(["flower", "flow", "flight"]);
