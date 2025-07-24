<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Agencia';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida - ERROR de conexión: " .$conn->connect_error);
}
echo "Conexión exitosa";

$sql = "
SELECT H.nombre, COUNT(R.id_reserva) AS total_reservas
FROM RESERVA R
JOIN HOTEL H ON R.id_hotel = H.id_hotel
GROUP BY R.id_hotel
HAVING COUNT(R.id_reserva) > 2
";

$result = $conn->query($sql);

echo "<h3>Hotel</h3><ul>";
while($row = $result->fetch_assoc()) {
    echo "<li>{$row['nombre']} - {$row['total_reservas']} reservas</li>";
}
echo "</ul>";

$conn->close();
?>