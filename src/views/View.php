<?php

namespace excalibur\hw4\views;

use excalibur\hw4\configs as CFG;
use excalibur\hw4\models as MDL;
use excalibur\hw4\controllers as CTR;
use excalibur\hw4\views as VWS;

class View
{

    private $mdl;

    function landing ()
    {
        $mdl = new MDL\Model();
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
        
        
        
        
        
        $query = "INSERT INTO Sheet VALUES (NULL,'{$_POST['input']}', NULL)";
        
        CFG\CreateDB::do_query($query);
    }

}
//<input type="text" placeholder="New sheet name or code" id="input" value="<?php $db->insert(filter_input(INPUT_POST, 'input', \FILTER_SANITIZE_SPECIAL_CHARS));" required>