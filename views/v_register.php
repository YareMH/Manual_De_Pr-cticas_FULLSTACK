<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="password"], input[type="email"], input[type="numeric"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #33ACFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #33E6FF;
        }
    </style>
</head>
<body>
    <form method="post" action="register.php">
        <label for="id">ID de usuario:</label>
        <input type="text" id="id" name="id" required/>

        <label for="usrname">Usuario:</label>
        <input type="text" id="usrname" name="usrname" required/>

        <label for="usrPw">Contraseña:</label>
        <input type="password" id="usrPw" name="usrPw" required/>

        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" required/>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required/>

        <label for="Telefono">Teléfono:</label>
        <input type="numeric" id="Telefono" name="Telefono" required/>

        <input type="submit" value="Registrar"/>
    </form>
</body>
</html>
