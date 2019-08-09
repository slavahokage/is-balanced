#!/usr/bin/php
<?php

if (file_exists('../vendor/autoload.php')) {
    require_once('../vendor/autoload.php');
} else {
    require_once('../../../autoload.php');
}

use function BalanceChecker\isBalanced;

$firstArgumentOfScript = $argv[1];

if (isset($firstArgumentOfScript)) {
    echo isBalanced($firstArgumentOfScript);
}
