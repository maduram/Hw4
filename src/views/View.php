<?php

namespace excalibur\hw4\views;

use excalibur\hw4\configs as CFG;
use excalibur\hw4\models as MDL;
use excalibur\hw4\controllers as CTR;
use excalibur\hw4\views as VWS;

class View
{

    private $cfg;

    function landing ()
    {
        $model = new MDL\Model();
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Web Sheets</title>
            </head>
            <body>
                <h1><a href="index.php">Web Sheets</a></h1>

                <form action="index.php?c=api&m=edit" method="POST" >
                    <input type="text" placeholder="New sheet name or code" id="input" required>
<!--                           value="//php $model->get_input(filter_input(INPUT_POST, 'input',
 \FILTER_SANITIZE_SPECIAL_CHARS)); ?>" -->
 <input type="submit" value="Go" onclick="get_input(document.getElementById('input').value)">
                </form>
                
                <script src="src/scripts/UserInput.js"></script>
            </body>
            
        </html>
        <?php
    }

}