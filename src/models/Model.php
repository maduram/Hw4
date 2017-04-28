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
    
    
    public $connection;
    public $cfg; 
    public $db;
    
//     public function dbConnect()
//    {
//        $db = new CFG\CreateDB();
//        $db->createDB();
//        $this->initiateConnection();
//    }
//    public function initiateConnection()
//    {
//        $cfg = new CFG\Config();
//       $this->connection = new \mysqli($cfg::host, $cfg::username, $cfg::password, $cfg::port, $cfg::db);
////        if($this->connection->connect_error)
////        {
////            return false;
////        }
////        else 
////        {
////            return true;
////        }
//    }
    
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
        

    }

    function createCodes($id, $hash, $type) {
        //create in db
    }

}