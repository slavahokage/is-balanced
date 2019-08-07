#!/usr/bin/php
<?php

namespace BalanceChecker;

require_once('../vendor/autoload.php');

if (php_sapi_name() === 'cli') {
    return isBalanced($argv[1]);
}
