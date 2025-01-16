<?php
if(isset($_POST["nombre"])) {
    include("conexiondb.php");
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
    $stm = $conexion->prepare($sql);
    $stm ->bindParam(":nombre", $_POST["nombre"]);
    $stm -> bindParam(":email", $_POST["email"]);

    $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $stm->bindParam("password", $hashed_password);  

    $stm->execute();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <!-- Vinculando la hoja de estilos CSS -->
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="container">
        <form action="" method="post" class="formulario">
            <h2>Registrarse</h2>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
