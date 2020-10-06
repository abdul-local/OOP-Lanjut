<?php
include("model.php");
include("controller.php");
// use Codepolitan\Controller\HomeController;
// use Nyankod\Model\UserModel;

use Codepolitan\Controller\HomeController as controller;
use Nyankod\Model\UserModel as model;
$controller=new controller();
// $controller= new \Codepolitan\Controller\HomeController();
$controller->index();
// $model=new \Nyankod\Model\UserModel();
$model=new model();
$model->selectAll();

?>