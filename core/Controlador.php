<?php

class Controlador
{
    protected function mostrarVista($view, $data = [])
    {
        require_once './views/' . $view . '.php';
    }
}
