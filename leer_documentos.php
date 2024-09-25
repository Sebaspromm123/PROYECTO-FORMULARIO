<?php
// Incluir el archivo de conexión
include 'DIR' . '/conexion.php';

try {
    $sql = "SELECT id_tipoDocumento, codigo, glosa FROM TiposDocumentos";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Código</th><th>Glosa</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $row['id_tipoDocumento'] . "</td><td>" . $row['codigo'] . "</td><td>" . $row['glosa'] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$pdo = null;
?>