<?php

/*
 * CS 174 Spring 2017 Hw 4 (Madula R.)
 * 
 * Index.php landing page. Goes through controllers to see which page to load.
 */

namespace excalibur\hw4;

require_once 'vendor/autoload.php';

use excalibur\hw4\controllers as CTR;

//init controller
$controller = new CTR\Controller();

//check if on post page, then load content
if (isset($_REQUEST['c']) && isset($_REQUEST['m'])) {
    if ($_REQUEST['c'] == 'main' && $_REQUEST['m'] == 'landing') {
        $controller->apiController();
    }
    if ($_REQUEST['c'] == 'read' && $_REQUEST['m'] == 'display') {
        $controller->readController();
    }
} else {
    $controller->landingController();
}
