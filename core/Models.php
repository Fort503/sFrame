<?php
include_once("./core/Database.php");

class Model
{
    protected $dbConnection;

    public function __construct()
    {
        $database = new Database;
        $this->dbConnection = $database->conectar();
    }

    protected function ejecutarConsulta($sql, $params = []) {
        try {
            $statement = $this->dbConnection->prepare($sql);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die("Error al ejecutar la consulta: " . $e->getMessage());
        }
    }

    protected function obtenerRegistros($table) {
        $sql = "SELECT * FROM $table";
        $statement = $this->ejecutarConsulta($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function obtenerRegistroPorId($table, $id) {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $statement = $this->ejecutarConsulta($sql, [$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}