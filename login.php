<?php
$host = "localhost";
$db = "practica2php";
$user = "root";
$pass = "";
//crear la conexión
$conn = new mysqli($host,$user,$pass,$db);

//verificar la conexión 
if($conn->connect_error) {
    die("conexión fallida:".$conn->connect_error);
}

//recoger los datos del formulario 
$username = $_POST['username'];
$password = $_POST['password'];

//crear la consulta SQL
$sql = "SELECT * FROM usuario WHERE usrname = '$username' AND usrPw = '$password'";

//Ejecutar la consulta
$result = $conn->query($sql);

//verificar si el usuario existe 

if($result->num_rows > 0){
    incluide ('views/exito.html');
    //echo "Has ingresado con exito!!;
}else{
    incluide ('views/error.html');
    //echo "Usuario o contraseña incorrectos.";
}

$conn->close();
?>|