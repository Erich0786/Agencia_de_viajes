<?php
//Conexión a la base de datos (suponiendo que ya tienes conexión establecida)
$conn = new mysqli($servername, $username, $password, $dbname);
//Verificar la conexión
if($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//Obtener el ID del cliente a eliminar
$id = $_POST['id'];
//Consulta para eliminar un cliente de la base de datos
$sql = "DELETE FROM clientes WHERE id=$id";
if ($conn->query($sql)===TRUE) {
    echo "Cliente eliminado correctamente";
} else {
    echo "Error al eliminar el cliente: " . $conn->error;
}
//Cerrar la conexión a la base de datos
$conn->close();
?>