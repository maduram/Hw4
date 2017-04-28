<?php
namespace excalibur\Hw4\configs;

 /** 
  * CreateDB class that creates the db consisting of two tables. 
  * Author: Aishwarya Borkar
  */

use excalibur\Hw4\configs\Config;

require_once('Config.php');



class CreateDB{
 /** @var Connection| holds a connection object to database
 * with values defined in Config file 
 */

public function createDB(){
$conn = new \mysqli(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD,"", Config::DB_PORT, Config::DB_SOCKET);

 /** @var string| create database query */
$query="create database ".Config::DB_NAME;
$conn->query($query);

if($conn->connect_error)
{
    print("Error creating database");
    exit;
}
//This block creates tables and populates them as per "insert.sql" 
else
{
    $conn->select_db(Config::DB_NAME);
    $conn->query("drop table if exists sheettable");
    $conn->query("drop table if exists sheetcodestable");
    $handle = fopen("C:\\xampp\\htdocs\\Hw4\\Hw4\\src\\configs\\insert.sql", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $query = $line;
                $conn->query($query); 
                }
    fclose($handle);
    }
    else
    {
        print("insertsql file not found!");
    }
$conn->close();
    }
}
}