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
    
    public $sheetname;
    public $hashcode;
    
    public static function validate ()
    {
        $str = filter_input(INPUT_POST, 'input', \FILTER_SANITIZE_SPECIAL_CHARS);
        
        if (ctype_alnum($str))
        {
            $sheetname = $str;
        }
        
        if (ctype_digit($str) && strlen($str) == 8) {
            $hashcode = $str;
        } 
        
    }
}