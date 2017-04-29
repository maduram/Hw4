<?php

namespace excalibur\app_data\visitorlog; 

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
/*
 * CS 174 Spring 2017 Hw 4
 * logger file to log visits to all links
 */

// Create the logger
$logger = new Logger('visitor_log');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/spread.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->info('My logger is now ready');

