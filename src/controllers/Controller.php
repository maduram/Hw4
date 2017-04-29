<?php
namespace excalibur\hw4\controllers;

use excalibur\hw4\views as VWS;
use excalibur\hw4\configs as CFG;

/*
 * CS 174 Spring 2017 Hw 4
* Main Controller class that has specific controller functions to invoke the Landing page, the Edit *view, and the Read View.
*/

class Controller
{
    private $landing;
    private $edit;
    
    public $db; 
    
    /*
     * Controller to load landing views
     */
    function landingController ()
    {
        $landing = new VWS\View();
        $landing->landing();  
        
        $db = new CFG\CreateDB();
        $db->createDB();
    }
    
    /*
     * Controller to load edit spreadsheet views
     */
    function apiController ()
    {
        $edit = new VWS\EditView();
        $edit->editView();
    }
    
    /*
     * Controller to load display views
     */    
    function readController ()
    {
        $read = new VWS\ReadView();
        $read->readView();
    }
    
}
