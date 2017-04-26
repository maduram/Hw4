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
        
        $hash = substr(md5($_POST['input']), 0, 8);
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title>Web Sheets</title>
            </head>
            <body>
                <h1><a href="index.php">Web Sheets</a>: <?php echo "Sheet name"; ?></h1>

                <h2>Edit URL: </h2>
                <textarea rows="1" cols="70"><?php echo $cfg::BASE_URL . "c=main&m=landing&arg1=".$hash; ?>
                </textarea>
                <h2>Read URL: </h2> 
                <textarea rows="1" cols="70"><?php echo $cfg::BASE_URL . "c=main&m=landing&arg1=".$hash; ?>
                </textarea>
                <h2>File URL: </h2> 
                <textarea rows="1" cols="70"><?php echo $cfg::BASE_URL . "c=main&m=landing&arg1=".$hash; ?>
                </textarea>

                <div id="spreadsheet"> </div>
                    <script src="src/scripts/spreadsheet.js">
                        document.getElementById("spreadsheet").innerHTML = "Spreadsheet";
                    </script>
            </body>
        </html>
        <?php
    }

}