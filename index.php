<?php
// start session
session_start();

require('config.php');
require('classes/Bootsrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/Messages.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootsrap = new Bootsrap($_GET);
$controller = $bootsrap->createController();

if($controller){
    $controller->executeAction();
}
