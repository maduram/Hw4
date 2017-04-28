<?php

namespace excalibur\hw4\configs;

use excalibur\hw4\configs as CFG;

class CreateDB
{

    function createDB ()
    {


        $cfg = new CFG\Config();

        $host = $cfg::host;
        $usr = $cfg::username;
        $pwd = $cfg::password;
        $db = $cfg::db;
//Create connection
        $conn = new \mysqli($host, $usr, $pwd, $db);
        

       $dbcreate = 'CREATE DATABASE IF NOT EXISTS '.$cfg::db;  
        if ($conn->query($dbcreate) === true) {
            echo $db . " created\n";
            //$conn->select_db($db);
        } else {
            echo "Database could not be created: " . $conn->error . "\n";
            die;
        }
        
//Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error. "\n");
        }
        echo "Connected successfully". "\n";


// sql to create table
//        $sql = "CREATE TABLE Sheet (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//    sheet_name VARCHAR, 
//    sheet_data INT(8) UNSIGNED ); ";
        $sql = "CREATE TABLE Sheet (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
sheet_name VARCHAR(30) NOT NULL,
sheet_data TEXT
)";
        
        $sqlCodes = "CREATE TABLE Sheet_Codes (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
hash_code INT(8) NOT NULL,
code_type CHAR(1)
)";


        if ($conn->query($sql) === TRUE) {
            echo "Table Sheet created successfully\n";
        } else {
            echo "Error creating table: " . $conn->error. "\n";
        }
        
        if ($conn->query($sqlCodes) === TRUE) {
            echo "Table Sheet_Codes created successfully\n";
        } else {
            echo "Error creating table: " . $conn->error. "\n";
        }
//foreach ($sql as $query) {
//    // success message if query runs correctly
//    if ($conn->query($query)) {
//        $conn->select_db($cfg::db);
//
//        //choose query
//        echo $query . " created\n\n";
//    }
//    // gives error message if query did not run successfully and stops the script
//    else {
//        echo "Table could not be created: " . $conn->error . "\n";
//        die;
//    }
//}

        $conn->close();
    }

}