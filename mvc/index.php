<?php
/**
 *Front controller
 *Including the required files need for the mvc
 */
require_once 'Controller.php';
require_once 'Model.php';
require_once 'View.php';

/**
 * instantiate the controller class and calling action method
 */
$Controller = new Controller();
$Controller->Action();
