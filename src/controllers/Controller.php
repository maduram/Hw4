<?php
namespace excalibur\hw4\controllers;

use excalibur\hw4\views as VWS;
use excalibur\hw4\configs as CFG;

/*
* Main Controller class that has specific controller functions to invoke the Landing page, the Edit *view, and the Read View.
*/

class Controller
{
    private $landing;
    private $edit;
    
    public $db; 
    
    function landingController ()
    {
        $landing = new VWS\View();
        $landing->landing();  
        
        $db = new CFG\CreateDB();
        $db->createDB();
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
