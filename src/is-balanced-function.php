<?php

namespace BalanceChecker;

function isBalanced(string $pairs): bool
{
    $countOfDifferentBrackets = [];

    for ($i = 0; $i < strlen($pairs); $i++) {
        if ($pairs[$i] === '(') {
            array_push($countOfDifferentBrackets, 1);
        } else if ($pairs[$i] === ')') {
            $item = array_pop($countOfDifferentBrackets);

            if (is_null($item)) {
                return false;
            }
        }
    }

    if (!empty($countOfDifferentBrackets)) {
        return false;
    }

    return true;
}
