# yeisidm2.github.io

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Página de Registro e Inicio de Sesión</title>
</head>
<body>
    <div class="container">
        <img src="yei.jpg" alt="tienda">
        <form action="registro.php" method="POST">
            <h2>Registro de Usuario</h2>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        <form action="login.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
