<?php
include 'conexion.php';

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas = $_POST['plazas'];
$precio = $_POST['precio'];

$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas, precio)";

if ($conn->query($sql)===TRUE) {
    echo "Vuelo agregado";
} else {
    echo "Error: " .$conn->error;
}
$conn->close();
?>