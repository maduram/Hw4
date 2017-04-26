<?php

/*
 * CS 174 Spring 2017 Hw 4 (Madula R.)
 * Model class to handle storage of variables and db creation
 */

namespace excalibur\hw4\models;

class Model {
    
    private $name;
    private $code;
    public $in;
    
    function validate($data) {
        $flag = false;
        
        $input = str_replace(' ', '', $data);
        
        if (ctype_alnum($input))
        {
            $in = $input;
            $flag = true;
        }
        
        if (ctype_digit($input) && strlen($input) == 8) {
            $in = $input;
            $flag = true;
        } else {
            $flag = false;
        }

        return $flag;
    }
    
    function display_name()
    {
        echo $in;
    }
    
    function createSheet($id, $sh, $shdata) {
        //create in db
        
    }

    function createCodes($id, $hash, $type) {
        //create in db
    }

}