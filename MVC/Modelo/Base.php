<?php
class BD {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "concesionario";
    public $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Conexión fallida: " . $this->connection->connect_error);
        }
    }
    
    public function Obtenercon() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection->close();
    }
}
?>