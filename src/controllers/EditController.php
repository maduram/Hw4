<?php
namespace excalibur\hw4\controllers;

class EditController extends Controller
{
    public $hr;
    public $ft;
    function __construct()
	{
		parent::__construct();
	}
        
        function show_form()
	{
		$hr = new \excalibur\hw4\views\layouts\Header();
                $hr = new \excalibur\hw4\views\layouts\Footer();
		$this->hr->render();
                $this->fr->render();
	}
}