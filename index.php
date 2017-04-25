<?php
namespace excalibur\hw4;
require_once 'vendor/autoload.php';


$model = new \excalibur\hw4\models\Model();
$controller = new \excalibur\hw4\controllers\Controller();
$view = new \excalibur\hw4\views\View();






//$view->test($test3);
//$model = new Model();
//$controller = new Controller($model);
//$view = new View($controller, $model);
//
//$controller->validate();
//
//echo $view->output();
/*
 * controller base = construct -> init model/input
 * edit controller: generate links, show spreadsheet, update after prompt, add sheet name to header, validate input (dont submit if not valid)
 * read controller: display spreadsheet, file url
 * file controller: display xml
 * 
 * view base = construct header file & footer file, render display
 * header/footer elements - view.render(data)
 * landing - render form
 *  
 * 
 */