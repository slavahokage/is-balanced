<?php

namespace BalanceChecker;

require_once('../vendor/autoload.php');

if (php_sapi_name() === 'cli') {
    global $argv;
    return isBalanced($argv[1]);
}
