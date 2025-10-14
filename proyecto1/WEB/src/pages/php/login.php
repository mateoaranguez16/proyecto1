<?php
session_start();
require_once 'db.php';  // Incluye tu conexión a la base de datos

// Obtener datos del formulario
$usernameOrEmail = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (!$usernameOrEmail || !$password) {
    die("Por favor completa todos los campos.");
}

try {
    // Buscar usuario por nombre o email
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = :user OR email = :user LIMIT 1");
    $stmt->execute(['user' => $usernameOrEmail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Login exitoso, guardamos datos en sesión
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['nombre'];
        
        // Redirigir a perfil
        header("Location: ../../../perfil.html");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} catch (PDOException $e) {
    die("Error en la base de datos: " . $e->getMessage());
}
