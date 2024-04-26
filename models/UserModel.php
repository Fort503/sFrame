<?php
include_once("./core/Models.php");

class UsersModel extends Model {
    private $tableName = "users";

    public function getAllUsers()
    {
        $usuarios = $this->obtenerRegistros($this->tableName);
        return $usuarios;
    }
}