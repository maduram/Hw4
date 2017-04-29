<?php

namespace excalibur\hw4\views;

use excalibur\app_data\visitorlog; 
use excalibur\hw4\configs as CFG;
/*
 * CS 174 Spring 2017 Hw 4
 * View class to read spreadsheet
 */
class ReadView
{

    /*
     * Display spreadsheet and file download link.
     */
    function readView ()
    {
        //init configs
        $cfg = new CFG\Config();
        
        //start html
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Web Sheets</title>
            </head>
            <body>
                <h1><a href="index.php">Web Sheets</a>: Sheet name</h1>

                <h2>File URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>

                <div>Sheet display</div>
            </body>
        </html>
        <?php
        //end html
    }

}