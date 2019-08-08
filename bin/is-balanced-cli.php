<?php

namespace BalanceChecker;

if (file_exists('../vendor/autoload.php')){
    require_once('../vendor/autoload.php');
} else {
    require_once('../../../autoload.php');
}

if (php_sapi_name() === 'cli') {
    global $argv;
    if (isset($argv[1])){
        return isBalanced($argv[1]);
    }
}
