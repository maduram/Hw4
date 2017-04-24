<?php
require_once 'src/models/Model.php';
require_once 'src/views/View.php';

class Controller {

    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function get_submission() {
        if (isset($_POST['submitted'])) {
            $this->model->validate($_POST['sheetname']);
        }
    }

}
