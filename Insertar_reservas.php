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

for ($i = 1; $i <= 10; $i++) {
    $cliente = $i;
    $fecha = date('d - m - y');
    $vuelo = rand(1, 3);
    $hotel = rand(1, 3);

    $sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel)
    VALUES $cliente, $fecha, $vuelo, $hotel";
    $conn->query($sql);
}
echo "Reservas agregadas";
$conn->close();
?>