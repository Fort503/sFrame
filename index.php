<?php

require_once('core/Database.php');
require_once('controllers/HomeController.php');

$controller = new HomeController;
$controller->index();
