<?php

function validParentheses2($s)
{
    $open = array("{", "(", "[");
    $closed = array(
        "}" => "{",
        ")" => "(",
        "]" => "["
    );

    if (strlen($s) == 1) {
        return false;
    }

    if (in_array($s[0], $open) == false) {
        return false;
    }

    $stack = array();

    for ($i = 0; $i < strlen($s); $i++) {
        if (in_array($s[$i], $open)) {
            array_unshift($stack, $s[$i]);
        } else if ($closed[$s[$i]] == $stack[0]) {
            array_shift($stack);
        } else {
            return false;
        }
    }

    if (count($stack) == 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(validParentheses2("){[()]}"));
