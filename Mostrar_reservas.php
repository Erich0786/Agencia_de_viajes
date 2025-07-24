<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Agencia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida - ERROR de conexión: " .$conn->connect_error);
}
echo "Conexión exitosa";

$result = $conn->query("SELECT * FROM RESERVA");
echo "<h3>Reservas:</h3><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>Cliente: {$row['id_cliente']} - Vuelo: {$row['id_hotel']} - Hotel: {$row['id_hotel']} - Fecha: {$row['fecha']}</li>";
}
echo "</ul>";

$conn->close();
?>