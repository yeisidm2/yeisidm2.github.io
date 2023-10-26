<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    try {
        // Conexión a la base de datos MongoDB
        $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

        // Selecciona la base de datos
        $database = $mongoClient->selectDatabase("tiendapp");

        // Selecciona la colección (tabla) en la que deseas insertar los datos
        $collection = $database->usuarios;

        // Crear un documento con los datos del usuario
        $document = [
            "nombre" => $nombre,
            "email" => $email,
            "contrasena" => $contrasena
        ];

        // Insertar el usuario en la colección
        $insertResult = $collection->insertOne($document);

        if ($insertResult->getInsertedCount() > 0) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error al registrar el usuario.";
        }
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Error de MongoDB: " . $e->getMessage();
    }
}
?>

