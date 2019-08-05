#!/usr/bin/php
<?php

namespace BalanceChecker;

require_once('../vendor/autoload.php');

if (php_sapi_name() === 'cli') {
    global $argv;
    echo (isBalanced($argv[1])) ? 'true' : 'false';
}
