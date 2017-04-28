<?php
namespace excalibur\hw4\controllers;

use excalibur\hw4\controllers\Controller;
use excalibur\hw4\configs\Config;

class EditController extends Controller
{
    public $hr;
    public $ft;


	public function invoke()
	{
		if($this->model->connection->ping())
		{
			$this->model->closeConnection();
		}
	}
        
    function show_form()
	{
		$hr = new \excalibur\hw4\views\layouts\Header();
        $hr = new \excalibur\hw4\views\layouts\Footer();
		$this->hr->render();
        $this->fr->render();
	}
}