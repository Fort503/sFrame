<?php

require_once './routes/router.php';
require_once './controllers/HomeController.php';
require_once './controllers/UserController.php';

$router = new Router();
$router->add('/', 'HomeController@index');
$router->add('/info', 'HomeController@showInfo');

// Rutas para usuarios
$router->add('/users', 'UsersController@index');

$router->run();
?>