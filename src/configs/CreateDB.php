<?php

namespace excalibur\hw4\configs;

use excalibur\hw4\configs as CFG;

class CreateDB
{

    const HOST = CFG\Config::host;
    const USER = CFG\Config::username;
    const PWD = CFG\Config::password;
    const DB = CFG\Config::db;

    public $conn;

    public static function connect ()
    {
        $conn = mysqli_connect(self::HOST, self::USER, self::PWD, self::DB);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error . "<br />");
        }

        return $conn;
    }

    public static function dbCreate ()
    {
        $conn = self::connect();

        $dbCreate = "CREATE DATABASE IF NOT EXISTS " . self::DB;

        //$result = mysqli_query($conn, $dbCreate) or die("Error creating database.\r");

        if ($conn->query($dbCreate)) {
            echo "Db created! <br />";
        } else {
            echo "Error creating database: " . $conn->error . "<br />";
        }

        //return $result;
    }

    public static function do_query ($query)
    {
        $conn = self::connect();

        if ($conn->query($query)) {
            echo "Query worked! <br />";
        } else {
            echo "Error creating query: " . $conn->error . "<br />";
        }

        //return $doQuery;
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
        //$alter = "ALTER TABLE Sheet AUTO_INCREMENT=1";

        //self::do_query($sql);
        //self::do_query($sqlCodes);
        //self::do_query($alter);

        $input = filter_input(INPUT_POST, 'input',
             \FILTER_SANITIZE_SPECIAL_CHARS);
        $string = str_replace(' ', '', $input);
        $string = mysql_real_escape_string($string);

        $query = "INSERT INTO Sheet (shid, sheetname, sheetdata) VALUES (NULL,`$string`, NULL)";

        self::do_query($query);





        self::closeConnection();
    }

    function get_shname ()
    {
        $conn = self::connect();

        $input = filter_input(INPUT_POST, 'input', \FILTER_SANITIZE_SPECIAL_CHARS);
        $string = str_replace(' ', '', $input);

        $query2 = "SELECT * from Sheet WHERE sheet_name=" . $string;

        $result = $conn->query($query2);
        while ($row = $result->fetch_assoc()) {

            if ($row["sheet_name"] == $string) {
                echo $string;
            } else {
                echo "this name doesnt exist. <br />";
            }
        }
    }

}