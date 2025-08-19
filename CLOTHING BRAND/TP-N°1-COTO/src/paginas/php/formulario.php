<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    $errores = [];
    if (!$nombre) {
        $errores[] = "El nombre es obligatorio.";
    }
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico es inválido.";
    }
    if (!$mensaje) {
        $errores[] = "El mensaje no puede estar vacío.";
    }

    if (empty($errores)) {
        $exito = "Gracias, $nombre. Hemos recibido tu mensaje.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Formulario de contacto</title>
</head>
<body>
    <h1>Contáctanos</h1>

    <?php
    if (!empty($errores)) {
        echo "<ul style='color:red;'>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    }

    if (!empty($exito)) {
        echo "<p style='color:green;'>$exito</p>";
    }
    ?>

    <form method="post" action="">
        <label for="nombre">Nombre:</label><br />
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre ?? ''); ?>" required /><br /><br />

        <label for="email">Correo electrónico:</label><br />
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required /><br /><br />

        <label for="mensaje">Mensaje:</label><br />
        <textarea id="mensaje" name="mensaje" rows="5" required><?php echo htmlspecialchars($mensaje ?? ''); ?></textarea><br /><br />

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
