<?php
// El host debe ser el nombre del servicio definido en el compose ('db') [cite: 42]
$host = 'db'; 
$db   = getenv('DB_NAME'); [cite: 77]
$user = getenv('DB_USER'); [cite: 77]
$pass = getenv('DB_PASS'); [cite: 77]

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
