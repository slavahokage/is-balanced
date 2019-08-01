<?php

namespace Vyacheslav;

function isBalanced(string $pairs): bool
{

    if (!preg_match('#^[()]+$#', $pairs)) {
        return false;
    }

    $leftBracket = 0;
    $rightBracket = 0;

    for ($i = 0; $i < strlen($pairs); $i++) {
        if ($pairs[$i] === '(') {
            $leftBracket++;
        } else {
            $rightBracket++;
            if ($rightBracket > $leftBracket) {
                return false;
            }
        }
    }

    if ($leftBracket !== $rightBracket) {
        return false;
    }

    return true;
}
