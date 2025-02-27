<?php
class UserConnection {
    private $host = '193.203.175.125';
    private $db_user;
    private $db_password = 'PruebaCAREPP2025*'; // Contraseña fija
    private $database;
    public $connection;

    public function __construct() {
        session_start(); // Asegura que la sesión esté iniciada

        if (!isset($_SESSION['user_db']) || !isset($_SESSION['user_db_user'])) {
            die("No hay credenciales para conectarse a la base de datos.");
        }

        $this->database = $_SESSION['user_db'];
        $this->db_user = $_SESSION['user_db_user'];

        $this->connection = new mysqli($this->host, $this->db_user, $this->db_password, $this->database);

        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>
