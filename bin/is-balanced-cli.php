<?php

namespace BalanceChecker;

require_once('../vendor/autoload.php');

if (php_sapi_name() === 'cli') {
    global $argv;
    if (isset($argv[1])){
        return isBalanced($argv[1]);
    }
}
