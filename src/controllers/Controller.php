<?php
namespace excalibur\hw4\controllers;

use excalibur\hw4\views as VWS;

use excalibur\hw4\configs\Config;
use excalibur\hw4\models\DataModel;

class Controller
{
    public $model;
    private $input;
    
    private $landing;
    private $edit;
<<<<<<< HEAD
    public $data;

    public function __construct()
    {
        $this->data=[];
        $this->data['title']="";
        $this->data['sheetid']="";
        $this->data['sheetname']="";
        $this->data['sheetdata']="";
        $this->data['hashcode']="";
        $this->data['codetype']="";
        $this->model=new DataModel();
    
    }

=======
    private $read;
>>>>>>> bd8001168c802cbc99b37041c80eb74e9ef19d4b
    
    function landingController ()
    {
        $landing = new VWS\View();
        $landing->landing();        
    }
    
    function apiController ()
    {
        $edit = new VWS\EditView();
        $edit->editView();
    }
    
    function readController ()
    {
        $read = new VWS\ReadView();
        $read->readView();
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
