<?php
class Database 
{
    private $host;
    private $username;
    private $database;
    private $password;
    private $charset;
    private $pdoObject;

    public function __construct() {
        $config = require_once('../config/database.php');
        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->database = $config['database'];
        $this->password = $config['password'];
        $this->charset = $config['charset'];
    }

    public function conectar() {
        try {
            $dataSourceName = "mysql:host={$this->host};dbname={$this->database};charset={$this->charset}";
            $this->pdoObject = new PDO($dataSourceName, $this->username, $this->password);
            $this->pdoObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdoObject;
        } catch(PDOException $error) {
            die("Error de conexion: " . $error->getMessage());
        }
    }

    public function ejecutarSQL($consulta, $parametros = []) {
        try {
            $statement = $this->pdoObject->prepare($consulta);
            $statement->execute($parametros);
            return $statement;
        } catch (PDOException $error) {
            die("Error al ejecutar la consulta: " . $error->getMessage());
        }
    }
}