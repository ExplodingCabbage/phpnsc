<?php

require_once __DIR__.'/src/autoload.php';

use Symfony\Component\Console as Console;

$application = new Console\Application('phpnsc', '1.0.0');
$application->add(new rg\tools\phpnsc\Command('run'));
$application->run();