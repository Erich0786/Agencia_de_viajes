<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de clientes</title>
    <style>
        /*Reglas de CSS */
    </style>
    <script>
        /*Aquí puedes incluir validaciones JavaScript*/
        function validar() {
            let nombre = document.getElementById('nombre').value;
            let email = document.getElementById('email').value;
            if (nombre === " || email ===") {
                alert('Por favor completa todos los campos');
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h2>Formulario de Clientes</h2>
    <form action="procesar_datos.php" method="post" onsubmit="return validad()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Guardar Cliente">
    </form>
</body>
</html>

<?php
$_servidor = 'mysql:host=localhost;dbname=comercio';
$usuario = 'nombre_de_usuario';
$password = 'contraseña';
try {
    $conn = new PDO($servidor, $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa con PDO";
} catch (PDOException $e) {
    echo "Conexión fallida - ERROR: " . $e->getMessage();
}
?>
