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
    
    function hashCode ()
    {
        
        $hash = substr(md5($_POST['input']), 0, 8);
        
    }
    
    function createSheet($id, $sh, $shdata) {
        //create in db
        //$query = mysql_query("INSERT INTO user_data (id, phone, location, speed, direction, comment) VALUES ('$id', '$phone', '$location', '$speed', '$direction', '$comment')");
    }

    function createCodes($id, $hash, $type) {
        //create in db
    }

}