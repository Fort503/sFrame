<?php
require_once("./core/Controlador.php");
class HomeController extends Controlador {
    public function index() {
        $this->mostrarVista("home");
    }
}