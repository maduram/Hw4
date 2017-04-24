<?php
require_once 'src/models/Model.php';
require_once 'src/views/View.php';
require_once 'src/controllers/Controller.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

$controller->get_submission();

echo $view->output();
?>