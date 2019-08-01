<?php

namespace Vyacheslav;

ini_set('display_errors', 1);

require_once ('../vendor/autoload.php');

if (php_sapi_name() === 'cli') {
    global $argv;
    echo (isBalanced($argv[1])) ? 'true' : 'false';
}
