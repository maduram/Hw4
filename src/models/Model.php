<?php
require_once 'src/views/View.php';
require_once 'src/controllers/Controller.php';

class Model {

    public function update_date($name) {
        if ($name == "hello")
        {
            echo "Sucessful submission: " . $_POST['sheetname'];
        }
        else echo "not right";
    }

}

