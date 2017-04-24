<?php

namespace excalibur\hw4;

require_once('vendor/autoload.php');

class Model {

    public $text;

    

    public function __construct() {

        $this->text = 'Hello world!';

    }        

}
class View {

    private $model;

    public function __construct(Model $model) {

        $this->model = $model;
    }

    public function output() {

        return '<a href="index.php?action=textclicked">' . $this->model->text . '</a>';
    }

}

$model = new Model();

//It is important that the controller and the view share the model

$controller = new Controller($model);

$view = new View($model);

if (isset($_GET['action']))
    $controller->{$_GET['action']}();

echo $view->output();

class Controller {

    private $model;

    public function __construct(Model $model) {

        $this->model = $model;
    }

    public function textClicked() {

        $this->model->text = 'Text Updated';
    }

}

//redirects to landing page if the controller variable is not set
/* if(!isset($_REQUEST['c']))
  {
  header("Location: index.php");
  }
  //checks where to refirect the user
  else
  {
  //Switch case for directing the user to a page based on variable c
  switch($_REQUEST['c'])
  {
  //ListController, directs the user either to the Landing page or the SubList page based on the method for the controller passed by variable m
  case "ReadController":
  $method = $_REQUEST['m'];
  $class = 'sjsustudents\\hw3\\controllers\\'.$_REQUEST['c'];
  $object = new $class();
  $object->$method($_REQUEST['arg1']);
  break;
  case "FileController":
  $method = $_REQUEST['m'];
  $class = 'sjsustudents\\hw3\\controllers\\'.$_REQUEST['c'];
  $object = new $class();
  $object->$method($_REQUEST['arg1']);
  break;
  case "EditController":
  //checks if variable m is "submit_form, if it true then case breaks and no page is drawn"
  if (strcmp($_REQUEST['m'], "submit_form") == 0)
  {
  break;
  }
  //directs the user to either the NewList page, NewNote page, or the ViewNote page based on the controller set by the variable c
  $method = $_REQUEST['m'];
  $class = 'sjsustudents\\hw3\\controllers\\'.$_REQUEST['c'];
  $object = new $class();
  //calls the selected controllers method based on the variable m
  $object->$method($_REQUEST['arg1']);//, $_REQUEST['arg2']);
  break;
  }
  }

  //checks if there is a new list to be saved into the database
  /*if (isset($_POST['addlist']))
  {
  //removes any html tags from the POST
  $filteredData = filter_var($_POST['name'], 513);
  //checks if the name variable is not empty
  if (!empty($filteredData))
  {
  $data['name'] = $filteredData;;
  $data['id'] = $_POST['id'];
  $method = $_REQUEST['m'];
  $class = 'sjsustudents\\hw3\\controllers\\'.$_REQUEST['c'];
  $object = new $class();
  $object->$method($data, $_POST['type']);
  }
  //redirects the user back to the sublist  page based on the parent list that the user created the new list on.
  header("Location: index.php?c=ListController&m=direct&arg1=".$_POST['id']);
  }

  //checks if there is a new note to be saved into the database
  if (isset($_POST['addnote']))
  {
  //removes any html tags from the POST
  $filteredTitle = filter_var($_POST['title'], 513);
  $filteredContent = filter_var($_POST['note'], 513);
  //checks if the the title and note variables are not empty
  if (!empty($filteredTitle) && !empty($filteredContent))
  {
  $data['name'] = $filteredTitle;
  $data['content'] = $filteredContent;
  $data['id'] = $_POST['id'];
  $data['date'] = date("Y-m-d");
  $method = $_REQUEST['m'];
  $class = 'sjsustudents\\hw3\\controllers\\'.$_REQUEST['c'];
  $object = new $class();
  $object->$method($data, $_POST['type']);
  }
  //redirects the user to the sublist page where the new note was created in
  header("Location: index.php?c=ListController&m=direct&arg1=".$_POST['id']);
  } */
?>
