<?php
namespace excalibur\hw4\views;
class View
{
    public function __construct()
    {
        echo "test view";
        echo "\n";
    }
}






//require_once 'src/models/Model.php';
//require_once 'src/controllers/Controller.php';

/*class View {

    private $model;
    private $controller;

    public function __construct(Controller $controller, Model $model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        ?>

        <DOCTYPE! html>
            <head>
                <title>Web Sheets</title>
                <link rel="stylesheet" type="text/css" href="src/styles/main.css">
            </head>

            <body>
                <h1><a href="index.php">Web Sheets</a></h1>
                
                <form action="index.php?m=post" method="POST">
                    <input type="text" name="sheetname" placeholder="New sheet name or code">
                    <input type="submit" value="Go">
                </form>
            </BODY>
        </html>
        <?php
    }
}*/

/*abstract class View
{
    protected $header;
    protected $footer;
    
    public function __construct() {
        $this->header = new excalibur\hw4\views\layouts\Header();
        $this->header = new LYOT\Footer();
    }
    
    abstract public function render($data);
}*/
