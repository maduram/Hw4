<?php
namespace excalibur\hw4\controllers;


use excalibur\hw4\models as MDL;
use excalibur\hw4\controllers as CTR;
use excalibur\hw4\views as VWS;

class Controller
{
    private $model;
    private $input;
    private $edit;
    
    function landingController ()
    {
        echo VWS\View::landing();        
    }
    
    function apiController ()
    {
        $edit = new VWS\EditView();
        $edit->editView();
    }
    
    function readController ()
    {
        
    }
    
   
    
}












//class Controller
//{
//	protected $model;
//	protected $view;
//
//    /**
//    *   Constructor for Controller class
//    */
//	public function __construct()
//	{
//		$this->model = 0;
//		$this->view = 0;
//	}
//
//}
//





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
