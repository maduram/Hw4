<?php

namespace excalibur\hw4\views;

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
                <h1><a href="index.php">Web Sheets</a>: Sheet name</h1>

                <h2>File URL: <?php $cfg::BASE_URL ?></h2>

                <div>Sheet display</div>
            </body>
        </html>
        <?php
    }

}