<?php

namespace excalibur\hw4\views;

use excalibur\hw4\configs as CFG;
use excalibur\hw4\models as MDL;

class EditView
{

    public $hash;

    function editView ()
    {
        $cfg = new CFG\Config();
        $db = new CFG\CreateDB();
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Web Sheets</title>
            </head>
            <body>
                
                <h1><a href="index.php">Web Sheets</a>: </h1><div><?php $db->get_shname(); ?> </div>

                <h2>Edit URL: </h2>
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing&arg1="; ?>
                </textarea>

                <h2>Read URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing&arg1="; ?>
                </textarea>

                <h2>File URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing&arg1="; ?>
                </textarea>
            </body>
        </html>
        <?php
    }

}