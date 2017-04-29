<?php

namespace excalibur\hw4\configs;

use excalibur\hw4\configs as CFG;
use excalibur\hw4\models as MDL;

class CreateDB
{

    const HOST = CFG\Config::host;
    const USER = CFG\Config::username;
    const PWD = CFG\Config::password;
    const DB = CFG\Config::db;

    public $conn;
    public $valid;
    public $sheetname;
    public $hashcode;

    public static function connect ()
    {
        $conn = mysqli_connect(self::HOST, self::USER, self::PWD, self::DB);

        if ($conn->connect_error) {
            echo "Connected to MySQL successfully!<br />";
        }
        else
        {
            echo "Connection failed: " . $conn->connect_error . "<br />";
        }

        return $conn;
    }

    public static function dbCreate ()
    {
        $conn = self::connect();

        $dbCreate = "CREATE DATABASE IF NOT EXISTS " . self::DB;

        if ($conn->query($dbCreate)) {
            echo "Created database '".self::DB."' successfully!<br />";
        }
        else
        {
            echo "Database creation failed, error: " . $conn->connect_error . "<br />";
        }
    }

    public static function do_query ($query)
    {
        $conn = self::connect();
        
        if ($conn->query($query)) {
            echo "Sent query to database successfully!<br />";
        }
        else
        {
            echo "Error creating query: " . $conn->error . "<br />";
        }
    }

    public static function closeConnection ()
    {
        return mysqli_close(self::connect());
    }

    public static function createDB ()
    {
        self::connect();
        self::dbCreate();

        $sql = "CREATE TABLE Sheet (
                shid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                shname VARCHAR(30) NOT NULL,
                shdata TEXT
                )";
        
        $sqlCodes = "CREATE TABLE Sheet_Codes (
                    cd_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    hash_code INT(8) NOT NULL,
                    code_type CHAR(1)
                    )";

        self::do_query($sql);
        self::do_query($sqlCodes);
        
        self::closeConnection();
    }

    function get_shname ()
    {
        $conn = self::connect();

        $input = mysql_real_escape_string(filter_input(INPUT_POST, 'input',
             \FILTER_SANITIZE_SPECIAL_CHARS));
        
        $query2 = "SELECT * from Sheet WHERE sheet_name='" . $input . "'";

        $result = $conn->query($query2);
        while ($row = $result->fetch_assoc()) {
            if ($row["sheet_name"] == $input) {
                return $input;
            }
        }
    }

}