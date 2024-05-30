<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $id = $_POST["id"];
    $usrname = $_POST["usrname"];
    $usrPw = $_POST["usrPw"];
    $edad = $_POST["edad"];
    $correo = $_POST["correo"];
    $Telefono = $_POST["Telefono"];


    //Conexión a la base de datos
    $servername= "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "practica2php";

    //crea una variable conexión
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    
    //verifica la conexión
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
}
    //prepara la sentencia SQL
    $stmt = $conn->prepare("INSERT INTO usuario (id, usrname, usrPw, edad, correo, telefono) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt=== false){
        die("Error preparing statement: " .$conn->error);
    }
    $stmt->bind_param("ssssss", $id, $usrname, $usrPW, $edad, $correo, $Telefono);

    //Ejecuta la sentencia SQL
    if ($stmt->execute()){
        echo "Usuario registrado con éxito.";
    } else{
        echo "Error executing statement: " .$stmt->error;
    }
    //cierra la sentencia y la conexión
    $stmt->close();
    $conn->close();
    }
?>