<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practica2php";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Eliminar el procedimiento almacenado si ya existe
$sql = "DROP PROCEDURE IF EXISTS SelectColumns;";
$conn->query($sql);

// Crear el procedimiento almacenado
$sql = "CREATE PROCEDURE SelectColumns()
BEGIN
    SELECT id, usrPw, Telefono FROM usuario;
END;";

if ($conn->query($sql) === TRUE) {
    echo "Procedimiento almacenado creado exitosamente.<br>";
} else {
    echo "Error creando el procedimiento almacenado: " . $conn->error;
}

// Llamar al procedimiento almacenado
$sql = "CALL SelectColumns();";
$result = $conn->query($sql);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Procedimiento Almacenado</title>
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
echo '<h1>Resultados del Procedimiento Almacenado</h1>';

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Contraseña</th><th>Teléfono</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["usrPw"] . "</td><td>" . $row["Telefono"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

echo '</body></html>';

$conn->close();
?>
