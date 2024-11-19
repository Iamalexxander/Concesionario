<?php
require_once '../Modelo/Base.php';

$conexion = new BD();
$conn = $conexion->Obtenercon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['año'];

    $checkSql = "SELECT COUNT(*) AS count FROM vehiculo WHERE placa = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $placa);
    $checkStmt->execute();
    $result = $checkStmt->get_result();
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        echo "<p class='text-danger'>La placa ya está registrada. Por favor, ingrese otra.</p>";
    } else {
        $sql = "INSERT INTO vehiculo (placa, marca, color, modelo, anio) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssi", $placa, $marca, $color, $modelo, $anio);
        if ($stmt->execute()) {
            header("Location: ../Vista/informacion.php?success=true");
            exit();        
        } else {
            header("Location: ../Vista/informacion.php?error=true");
            exit();        
        }
        $stmt->close();
    } else {
        echo "<p>Error en la preparación de la consulta: " . $conn->error . "</p>";
    }
}
}
?>