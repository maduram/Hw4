<?php

namespace excalibur\hw4\views;

use excalibur\hw4\configs as CFG;
use excalibur\hw4\models as MDL;
use excalibur\hw4\controllers as CTR;
use excalibur\hw4\views as VWS;
use excalibur\app_data\visitorlog;

/*
 * CS 174 Spring 2017 Hw 4
 * View class to handle display.
 */
class View
{

    private $mdl;

    function landing ()
    {
        //init model
        $mdl = new MDL\Model();
        
        //start html
        ?>
        <!DOCTYPE html>
        <head>
            <title>Web Sheets</title>
        </head>
        <body>
            <h1><a href="index.php">Web Sheets</a></h1>

            <form action="index.php?c=main&m=landing" method="POST">
                <input type="text" placeholder="New sheet name or code" name="input" required>
                <input type="submit" value="Go" >
            </form>

            <br />
            <h2>Database Results:</h2>
            <br />

        </body>
        </html>
        <?php
        //end html
        
        //send user input as sheet_name query value
        $query = "INSERT INTO Sheet VALUES (NULL,'{$_POST['input']}', NULL)";
        
        //init query
        CFG\CreateDB::do_query($query);
    }

}