<?php
require_once("../Modelo/Base.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Placa'])) {
        $placa = $_POST['Placa'];
    }
    if (isset($_POST['Marca'])) {
        $marca = $_POST['Marca'];
    }
    if (isset($_POST['Color'])) {
        $color = $_POST['Color'];
    }
    if (isset($_POST['Modelo'])) {
        $modelo = $_POST['Modelo'];
    }
    if (isset($_POST['anio'])) {
        $anio = $_POST['anio'];
    }
    
    $query = "INSERT INTO `vehiculo`(placa, marca, color, modelo, anio) VALUES (:placa,:marca,:color,:modelo,:anio)";
}
?>