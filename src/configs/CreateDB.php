<?php

namespace excalibur\hw4\configs;

use excalibur\hw4\configs as CFG;

class CreateDB
{
    public $host;
    public $usr;
    public $pwd;
    public $db;
    public $conn;
    
    function createDB ()
    {
        $cfg = new CFG\Config();

        $host = $cfg::host;
        $usr = $cfg::username;
        $pwd = $cfg::password;
        $db = $cfg::db;
//Create connection
        $conn = new \mysqli($host, $usr, $pwd, $db);


        $dbcreate = 'CREATE DATABASE IF NOT EXISTS ' . $cfg::db;

        if ($conn->query($dbcreate) === true) {
            echo $db . " created\n";
        } else {
            echo "Database could not be created: " . $conn->error . "\n";
            die;
        }

//Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error . "\n");
        }
        echo "Connected successfully" . "\n";


        $sql = "CREATE TABLE Sheet (
                sh_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                sheet_name VARCHAR(30) NOT NULL,
                sheet_data TEXT
                )";

        $sqlCodes = "CREATE TABLE Sheet_Codes (
                    cd_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                    hash_code INT(8) NOT NULL,
                    code_type CHAR(1)
                    )";
        
//        $sqlID = "CREATE TABLE Sheet_ID (
//sheet_id INT NOT NULL, 
//code_id INT(8) NOT NULL,
//FOREIGN KEY(sheet_id) REFERENCES Sheet(sh_id),
//FOREIGN KEY(code_id) REFERENCES Sheet(cd_id)
//)";


        if ($conn->query($sql) === TRUE) {
            echo "Table Sheet created successfully\n";
        } else {
            echo "Error creating table: " . $conn->error . "\n";
        }

        if ($conn->query($sqlCodes) === TRUE) {
            echo "Table Sheet_Codes created successfully\n";
        } else {
            echo "Error creating table: " . $conn->error . "\n";
        }

        $conn->close();
    }
    
    function insert()
    {
        
    }
}