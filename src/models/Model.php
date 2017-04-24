<?php
require_once 'src/views/View.php';
require_once 'src/controllers/Controller.php';

class Model {

    public function validate($name) {
        if ($name == "hello")
        {
            echo "Sucessful submission: " . $_POST['sheetname'];
        }
        else echo "not right";
    }

}

