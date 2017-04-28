<?php

/*
 * CS 174 Spring 2017 Hw 4
 * Model class to handle storage of variables and db creation
 */

namespace excalibur\hw4\models;

use excalibur\hw4\models as MDL;
use excalibur\hw4\configs as CFG;

class Model {
    
    private $name;
    private $code;
    public $in;

    public $model;
    public $connection;
    public $db; 
    
    function get_input($data) {
        
        
        
    }
    
    function hashCode ()
    {
        
        $hash = substr(md5($_POST['input']), 0, 8);
        
    }
    
    function createSheet($id, $sh, $shdata) {
        

    }

    function createCodes($id, $hash, $type) {
        //create in db
    }
    
//    function check () {
//    $flag = false;
//        
//        $input = str_replace(' ', '', $data);
//        
//        if (ctype_alnum($input))
//        {
//            $in = $input;
//            $flag = true;
//        }
//        
//        if (ctype_digit($input) && strlen($input) == 8) {
//            $in = $input;
//            $flag = true;
//        } else {
//            $flag = false;
//        }
//
//        return $flag;
//    }
}