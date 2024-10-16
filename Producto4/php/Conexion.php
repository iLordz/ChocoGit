<?php
// Definir las constantes de conexión a la base de datos
define("SERVIDOR", "localhost");
define("NOMBRE", "root");
define("CLAVE", '');
define("BD", "choco");

// Crear una conexión a la base de datos
$conexion = mysqli_connect(SERVIDOR, NOMBRE, CLAVE, BD);
mysqli_set_charset($conexion, 'utf8');

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

class Database {
    private $host;
    private $bd;
    private $nombre;
    private $clave;
    private $charset;

    public function __construct() {
        $this->host = 'localhost';
        $this->bd = 'UPS';
        $this->nombre = 'castorpro';
        $this->clave = 'C@$t0r_2023Pr0';
        $this->charset = 'utf8';
    }

    public function connect() {
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->bd . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($connection, $this->nombre, $this->clave, $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r("Error de conexión: " . $e->getMessage());
        }
    }
}

