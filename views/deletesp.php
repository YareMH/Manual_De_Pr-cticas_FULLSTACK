<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practica2php";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("<div class='error'>Conexión fallida: " . $conn->connect_error . "</div>");
}

// Sentencia SQL para borrar el procedimiento almacenado
$sql = "DROP PROCEDURE IF EXISTS SelectColumns;";

// Ejecutar la sentencia SQL y verificar el resultado
if ($conn->query($sql) === TRUE) {
    $message = "<div class='success'>Procedimiento almacenado eliminado exitosamente.</div>";
} else {
    $message = "<div class='error'>Error al eliminar el procedimiento almacenado: " . $conn->error . "</div>";
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Eliminación del Procedimiento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #98AFCE;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        .message {
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<h1>Resultado de la Eliminación del Procedimiento</h1>
<?php echo $message; ?>

</body>
</html>
