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

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
