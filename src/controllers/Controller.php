<?php
namespace excalibur\hw4\controllers;

use excalibur\hw4\views as VWS;
use excalibur\hw4\models as MDL;
use excalibur\hw4\configs as CFG;


class Controller
{
    public $model;
    private $input;
    
    private $landing;
    private $edit;
    
    
    public $connection;
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
