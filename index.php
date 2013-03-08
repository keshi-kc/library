<?php
/*
 **************************** Creation Log *******************************
File Name                   -  index.php
Description                 -  Class file for Authentication of users credentials
Version                     -  1.0
Created by                  -  Ramandeep
Created on                  -  March 05, 2013
****************************************************************************
*/


require_once './controller/mainController.php';

$obj=new MainController();
$obj->showMainView();

?>