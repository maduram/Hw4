<?php

namespace excalibur\hw4\views;

use excalibur\app_data\visitorlog; 
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
            <?php $logger = $this->get('logger');
                  $logger->info('Visit to editView has been made.');?>
                
                <h1><a href="index.php">Web Sheets</a>: </h1><div><?php $db->get_shname(); ?> </div>

                <h2>Edit URL: </h2>
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>

                <h2>Read URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>

                <h2>File URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>
            </body>
        </html>
        <?php
    }

}