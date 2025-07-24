<?php
//Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
$conn = new mysqli($servername, $username, $password, $dbname);
//Verificar la conexión
if($conn->connect_error) {
    die("Conexión fallida: ".$conn->connect_error);
}
//Obtener los datos del formulario
$id = $_POST['id'];
$nuevoNombre = $_POST['nuevo_nombre'];
$nuevoEmail = $_POST['nuevo_email'];
//Consulta para modificar un cliente en la base de datos
$sql = "UPDATE clientes SET nombre='$nuevoNombre, email='$nuevoEmail WHERE id=$id";
if ($conn->query($sql)===TRUE) {
    echo "Cliente modificado correctamente";
} else {
    echo "Error al modificar el cliente: " . $conn->error;
}
//Cerrar la conexión a la base de datos
$conn->close();
?>