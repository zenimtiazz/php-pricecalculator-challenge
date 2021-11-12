<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include model files
require 'Model/DatabaseLoader.php';
require 'Model/Customer.php';
require 'Model/CustomerLoader.php';
require 'Model/Product.php';
require 'Model/ProductLoader.php';
require 'Model/Group.php';
require 'Model/GroupLoader.php';
require 'Model/DB_Connector.php';



//include controllers
require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
/*
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}*/
$controller->render();