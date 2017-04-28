<?php

/*
 * CS 174 Spring 2017 Hw 4 (Madula R.)
 * Model class to handle storage of variables and db creation
 */

namespace excalibur\hw4\models;

use excalibur\hw4\configs\CreateDB;

use excalibur\hw4\configs\Config;

class Model {
    
    private $name;
    private $code;
    public $in;

    public $model;
    public $connection;
    public $db; 

    public function __construct()
    {
        $db=new CreateDB(); 
        $db->createDB();
        $this->initiateConnection();
    }

    public function initiateConnection()
    {
        $this->connection=new \mysqli(Config::DB_HOST,Config::DB_USER,Config::DB_PASSWORD,Config::DB_NAME,Config::DB_PORT);
        if($this->connection->connect_error)
        {
            return false;
        }
        else 
        {
            return true;
        }
    }

    public function closeConnection()
    {
        $this->connection->close();
    }
    
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