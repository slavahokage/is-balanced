<?php

namespace BalanceChecker;

function isBalanced(string $pairs): bool
{
    $countOfLeftBracket = 0;
    $countOfRightBracket = 0;

    for ($i = 0; $i < strlen($pairs); $i++) {
        if ($pairs[$i] === '(') {
            $countOfLeftBracket++;
        } else if ($pairs[$i] === ')') {
            $countOfRightBracket++;
            if ($countOfRightBracket > $countOfLeftBracket) {
                return false;
            }
        }
    }

    return true;
}
