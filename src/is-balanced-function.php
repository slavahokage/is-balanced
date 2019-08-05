<?php

namespace BalanceChecker;

function isBalanced(string $pairs): bool
{
    $countOfLeftBracket = 0;
    $countOfRightBracket = 0;

    for ($i = 0; $i < strlen($pairs); $i++) {
        if ($pairs[$i] === '(') {
            $countOfLeftBracket++;
        } else {
            $countOfRightBracket++;
            if ($countOfRightBracket > $countOfLeftBracket) {
                return false;
            }
        }
    }

    if ($countOfLeftBracket !== $countOfRightBracket) {
        return false;
    }

    return true;
}
