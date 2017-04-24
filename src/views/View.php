<?php
require_once 'src/models/Model.php';
require_once 'src/controllers/Controller.php';

class View {

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
                <form action="index.php" method="POST">
                    <input type="text" name="sheetname" placeholder="New sheet name or code">
                    <input type="hidden" name="submitted" value="yes">
                    <input type="submit" value="Go">
                </form>
            </BODY>
        </html>
        <?php
    }
}
