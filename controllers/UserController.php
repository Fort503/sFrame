<?php 

require_once("./core/Controlador.php");
require_once("./models/UserModel.php");

class UsersController extends Controlador {
    public function index() {
        $userModel = new UsersModel;
        $usuarios = $userModel->getAllUsers();
        
        $this->mostrarVista("userHome", ["usuarios" => $usuarios]);
    }
}