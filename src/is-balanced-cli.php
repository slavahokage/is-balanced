#!/usr/bin/php
<?php

namespace Vyacheslav;

require_once('../vendor/autoload.php');

if (php_sapi_name() === 'cli') {
    global $argv;
    echo (isBalanced($argv[1])) ? 'true' : 'false';
}
