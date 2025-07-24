<?php
//Conexión segura con la base de datos utilizando MySQLi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Agencia";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: ".$conn->connect_error);
}
//Validaciones de datos en php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
//Insertar datos en la base de datos
$sql = "INSERT INTO clientes (nombre, email) VALUES ('$nombre', '$email')";
if ($conn->query($sql)===TRUE){
    echo "Datos ingresados correctamente";
} else {
    echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>