<?php

require 'vendor/autoload.php';

use Stringy\Stringy as S;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

echo S::create('Hello World!')->swapCase()."\n";

// create a log channel
$log = new Logger('MyLogging');
$log->pushHandler(new StreamHandler('apps.log', Logger::WARNING));

// add records to the log
$log->warning('Memory low. Greater than 80%.');
$log->error('Time limit exceeded.');
?>