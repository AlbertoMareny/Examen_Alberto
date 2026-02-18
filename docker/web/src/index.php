<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head><title>Examen Coches</title></head>
<body>
    <h1>Modelos de Coches Disponibles</h1>
    <table border="1">
        <tr><th>ID</th><th>Marca</th><th>Modelo</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM coches");
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['marca']}</td><td>{$row['modelo']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
