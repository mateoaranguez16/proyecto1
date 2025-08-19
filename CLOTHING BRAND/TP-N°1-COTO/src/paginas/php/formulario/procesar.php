<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Validación básica
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Aquí podrías guardar en base de datos, enviar correo, etc.
        echo "Gracias, $nombre. Hemos recibido tu mensaje.";
    }
} else {
    echo "Acceso no válido.";
}
?>