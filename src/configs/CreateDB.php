<?php
namespace excalibur\hw4\configs;

use excalibur\hw4\configs as CFG;

$config = new CFG\Config();
$host = $config::host;
$usr = $config::username;
$pwd = $config::password;
$db = $config::db;

$cfg = new CFG\Config();

//Create connection
$conn = new mysqli($host, $usr, $pwd, $db);
//Check connection
if ($conn->connect_error)
{
    die("Connection failed");
}

$dbcreate = 'CREATE DATABASE IF NOT EXISTS '.$db;

if ($conn->query($dbcreate) === TRUE) {
    
	echo $db." created\n";
    $conn->select_db($db);
} else {
    echo "Error creating table: " . $conn->error;
    die;
}

// sql to create table
$sql = "CREATE DATABASE ".$cfg::db;

foreach ($sql as $query) {
    // success message if query runs correctly
    if ($conn->query($query))
    {
        $conn->select_db($cfg::db);
        //choose query
        echo $query." created\n\n";
    }
    // gives error message if query did not run successfully and stops the script
    else
    {
        echo "Table could not be created: ".$conn->error."\n";
        die;
    }
}

$conn->close();