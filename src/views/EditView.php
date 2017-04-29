<?php

namespace excalibur\hw4\views;

use excalibur\app_data\visitorlog as MON;
use excalibur\hw4\configs as CFG;

/*
 * CS 174 Spring 2017 Hw 4
 * View class to edit view.
 */
class EditView
{

    public $hash;

    /*
     * Creates page for editing the spreadsheet
     */

    function editView ()
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

                <h1><a href="index.php">Web Sheets</a>: </h1><div>Sheet name </div>
                <!--Edit Url-->
                <h2>Edit URL: </h2>
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>
                
                <!--Read Url-->
                <h2>Read URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>
                
                <!--File Url-->
                <h2>File URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>
            </body>
        </html>
        <?php
        //end html
    }

}