<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practica2php";

// Crear una nueva conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener los datos de la tabla "usuario"
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

// Incluir el inicio del documento HTML
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        h1 {
            color: #007BFF;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #007BFF;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #007BFF;
        }
        th {
            background-color: #007BFF;
            color: #ffffff;
        }
        tr:hover {
            background-color: #e9f3ff;
        }
        tr:nth-child(even) {
            background-color: #f2faff;
        }
    </style>
</head>
<body>';

// Título antes de la tabla
echo '<h1>Usuarios registrados</h1>';

// Verificar si la consulta devuelve más de 0 filas
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Contraseña</th><th>Fecha de Alta</th><th>Edad</th><th>Correo</th><th>Teléfono</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["usrname"] . "</td><td>" . $row["usrPw"] . "</td><td>" . $row["usrFechaAlta"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["correo"] . "</td><td>" . $row["Telefono"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Incluir el cierre del documento HTML
echo '</body></html>';

// Cerrar la conexión con la base de datos
$conn->close();
?>
