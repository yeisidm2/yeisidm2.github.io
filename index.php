<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Conexión a la base de datos (debes configurar esto según tu entorno)
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        $_SESSION["email"] = $email;
        header("Location: inicio.php"); // Redirige a la página de inicio después del inicio de sesión
    } else {
        echo "Credenciales incorrectas. Por favor, intenta de nuevo.";
    }

    $conn->close();
}
?>
