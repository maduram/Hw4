<?php
namespace excalibur\hw4\controllers;
class Controller
{
    public function __construct()
    {
        echo "test controller";
        echo "\n";
    }
}






//require_once 'src/models/Model.php';
//require_once 'src/views/View.php';

//class Controller {
//
//    private $model;
//    private $input;
//    private $input2;
//
//    public function __construct(Model $model) {
//        $this->model = $model;
//    }
//
//    public function validate() {
//        $input = "";
//        $input2 = "";
//        //$input = $_POST['sheetname'];
//        if (isset($_POST['sheetname'])) {
//        $input = $_POST['sheetname'];
//            
//            $input2 = str_replace(' ', '', $input);
//            if (ctype_alnum($input2) == true)
//            {
//                $this->model->store($input);
//            
//            }
//            else if (is_numeric($input) == true)
//            {
//                $this->model->store($input);
//            }
//            else $this->model->store("didnt work");
//        }
//    }
//
//}
