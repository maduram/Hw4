<?php

namespace excalibur\hw4\views;

use excalibur\app_data\visitorlog; 
use excalibur\hw4\configs as CFG;

class ReadView
{

    function readView ()
    {
        $cfg = new CFG\Config();
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Web Sheets</title>
            </head>
            <body>
            <?php $logger = $this->get('logger');
                  $logger->info('Visit to readView has been made.');?>
                <h1><a href="index.php">Web Sheets</a>: Sheet name</h1>

                <h2>File URL: </h2> 
                <textarea rows="1" cols="53" readonly><?php echo $cfg::BASE_URL . "c=main&m=landing"; ?>
                </textarea>

                <div>Sheet display</div>
            </body>
        </html>
        <?php
    }

}